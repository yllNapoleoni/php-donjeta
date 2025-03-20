<?php 
//open a file named "ds.txt" for writing
//nese file nuk egziston krijohet nje i ri me te njejtin emer
//nese file ekziston, mbishkruhet kontenti apo te dhenat dhe file paraprak fshihet



//w - e qel file per read and write, nese nuk ekziston e krijon nje tri
//r - eshte vetem read only mode
//a - eshte vetem read only mode edhe pointer shkon ne fund te file
//W+ - njejt si w
//r+ - eshte kur file is open ne read edhe write mode
//a+ - mundesh me shtu text ne fund te file
//x - krijohet nje file i ri for write mode

$filename="ds.txt";

$myfile=fopen($filename,"w");

$mytext="digital school";

fwrite($myfile,$mytext);





$myfilename2="txt2.txt";


$myfile2=fopen($myfilename2,"w+");

fwrite($myfile2,"jh4guaspeowighrepppquowwwh");


$myfile3=fopen("text3.txt","a+");

fwrite($myfile3, "\n add more lines to the file")

























?>