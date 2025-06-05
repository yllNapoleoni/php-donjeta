<?php
// Përdor lidhjen që ke dhënë
$user = "root";
$pass = "";
$server = "localhost";
$dbname = "bdylli";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Merr të dhënat nga tabela courses
$stmt = $conn->query("SELECT title, category, rating, reviews, price, icon, badge FROM courses");
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Skillfocus - Courses with Pagination</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <style>
    body.dark-mode {
      background-color: #121212;
      color: #e0e0e0;
    }
    body.dark-mode .bg-light {
      background-color: #1e1e1e !important;
    }
    body.dark-mode .text-muted {
      color: #aaa !important;
    }
    body.dark-mode .card,
    body.dark-mode .border {
      background-color: #1f1f1f;
      border-color: #333 !important;
    }
    body.dark-mode .text-blue-600 {
      color: #90caf9 !important;
    }
    .custom-shadow {
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }
    .fade-in {
      opacity: 0;
      transform: translateY(10px);
      animation: fadeInUp 0.6s ease-out forwards;
    }
    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body class="d-flex flex-column">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
      <a class="navbar-brand" href="index.html"><strong>SkillFocus</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="course.php">Courses</a></li>
          <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
          <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
          <li class="nav-item d-flex align-items-center ms-3">
            <button id="darkModeToggle" class="btn btn-outline-light btn-sm">🌙 Dark Mode</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="flex-shrink-0">
    <div class="container px-5 py-5">
      <div class="text-center mb-5 py-5 fade-in" style="animation-delay: 0.1s">
        <h2 class="fw-bolder text-primary mb-3">Our Courses</h2>
        <p class="lead text-muted">Explore our high-quality courses, page by page.</p>
      </div>

      <!-- Course Grid -->
      <div id="course-grid" class="row gy-4 mb-5"></div>

      <!-- Pagination -->
      <div class="d-flex justify-content-center">
        <nav class="d-flex align-items-center gap-2" id="pagination">
          <button id="prevBtn" class="btn btn-outline-primary btn-sm" disabled>
            <i class="fas fa-chevron-left"></i>
          </button>
          <div id="page-numbers" class="d-flex gap-2"></div>
          <button id="nextBtn" class="btn btn-outline-primary btn-sm">
            <i class="fas fa-chevron-right"></i>
          </button>
        </nav>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-4 mt-auto">
    <div>&copy; 2025 Skillfocus. All rights reserved.</div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Courses + Pagination JS -->
  <script>
    const courses = <?php echo json_encode($courses); ?>;
    const itemsPerPage = 3;
    let currentPage = 1;

    function renderCourses(page) {
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      const paginatedCourses = courses.slice(start, end);

      const courseGrid = document.getElementById("course-grid");
      courseGrid.innerHTML = "";

      paginatedCourses.forEach((course, index) => {
        const courseCol = document.createElement("div");
        courseCol.className = "col-md-4";

        courseCol.innerHTML = `
          <div class="card h-100 shadow-sm fade-in" style="animation-delay: ${index * 100}ms;">
            <div class="card-body text-center">
              <div class="mb-3 position-relative">
                <i class="fas ${course.icon} fa-3x text-primary"></i>
                ${course.badge ? `<span class="badge bg-primary position-absolute top-0 end-0">${course.badge}</span>` : ""}
              </div>
              <h5 class="card-title">${course.title}</h5>
              <p class="text-muted">Category: ${course.category}</p>
              <div class="mb-2 text-warning">
                ${'<i class="fas fa-star"></i>'.repeat(Math.floor(course.rating))}${course.rating % 1 ? '<i class="fas fa-star-half-alt"></i>' : ''}
                <small class="text-muted">(${course.reviews})</small>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <span class="text-primary fw-bold">${course.price}</span>
                <button class="btn btn-sm btn-primary">Enroll</button>
              </div>
            </div>
          </div>`;

        courseGrid.appendChild(courseCol);
      });
    }

    function renderPagination() {
      const totalPages = Math.ceil(courses.length / itemsPerPage);
      const pageNumbersContainer = document.getElementById("page-numbers");
      pageNumbersContainer.innerHTML = "";

      for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement("button");
        btn.className = `btn btn-sm ${i === currentPage ? "btn-primary text-white" : "btn-outline-primary"}`;
        btn.textContent = i;
        btn.addEventListener("click", () => {
          currentPage = i;
          updatePagination();
        });
        pageNumbersContainer.appendChild(btn);
      }

      document.getElementById("prevBtn").disabled = currentPage === 1;
      document.getElementById("nextBtn").disabled = currentPage === totalPages;
    }

    function updatePagination() {
      renderCourses(currentPage);
      renderPagination();
    }

    document.getElementById("prevBtn").addEventListener("click", () => {
      if (currentPage > 1) {
        currentPage--;
        updatePagination();
      }
    });

    document.getElementById("nextBtn").addEventListener("click", () => {
      const totalPages = Math.ceil(courses.length / itemsPerPage);
      if (currentPage < totalPages) {
        currentPage++;
        updatePagination();
      }
    });

    // Dark Mode Toggle
    document.getElementById("darkModeToggle").addEventListener("click", () => {
      document.body.classList.toggle("dark-mode");
    });

    // Initialize
    updatePagination();
  </script>
</body>
</html>
