#!/usr/bin/perl
    open(FP,"temp.txt");
while($t1=<FP>)
{
    chomp($t1);
    print "sed -i 's/<head>/<head><base href=\"http:\\/\\/webs.iiitd.edu.in\\/raghava\\/$t1\\/\">/gI' $t1/index.* \n";
}
close(FP);
