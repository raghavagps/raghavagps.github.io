<head>
<title>Pfeature:Composition:Simple:Amino Acids</title>
<meta charset="utf-8"> </head>
<?php include "header.html"; ?>


<div class="wrapper row3">
  <main class="hoc container clear">
<div>
<p align="center"><b>Welcome to Help Page</b></font></p>
<p align="justify">
<font size=3>
This page provides help to the users of Pfeature to compute the features of protein and peptide sequence. For each module which is implemented in Pfeature, here we provide the figures and description on how to use that module. Four general modules are provided with the respective 
</font>
<H2><a href="Pfeature_Manual.pdf"><font color="blue">Download Manual of Pfeature</font> </h2>

</p>

<table class="table">
<tr bgcolor=#899452 align=center><th><a href="#search"><font color ="white">Composition</a></th><th><a href="#categorization"><font color ="white">Binary Profiles</a></th><th><a href="#similarity"><font color ="white">Evolutionary Info</a></th><th><a href="#similarity"><font color ="white">Structure</a> </th><th><a href="#similarity"><font color ="white">Pattern</a> </th>

<tr bgcolor="#F8F8F8"><td valign=top><a href="#aac"><font color=black /><u>Simple</u></a><br><br/><a href="#pc"><font color=black /><u>Physico-chemical</u></a><br/><br/> <a href="#rd"><font color=black /><u>Repeats Distribution</u></a><br/><br/><a href="#se"><font color=black /><u>Shannon Entropy</u></a><br/><br/><a href="#mc"><font color=black /><u>Miscellaneous</u></a><br/><br/></td>
<br/><br/></a><td valign=top><a href="#BPaa"><font color=black /><u>Amino Acid</u></a><br/><br/><a href="#BPdpc"><font color=black /><u>Dipeptide</u></a><br/><br/><a href="#BPatc"><font color=black /><u>Atomic</u></a><br><br><a href="#BPres"><font color=black /><u>Residue Properties</u></a> <br><br><a href="#BPres"><font color=black /><u>AA-Index</u></a><br><br> </td>

<td valign=top><a href="#EIpp"><font color=black /><u>Generation of PSSM</u></a><br/><br/><a href="#EIpn"><font color=black /><u>PSSM normalization</u></a><br><br><a href="#EIpc"><font color=black /><u>PSSM composition</u></a><br><br><a href="#EIpp"><font color=black /><u>PSSM profile</u></a><br/><br/></td>
<td valign=top> <a href="#SBfp"><font color=black /><u>Finger prints</u></a><br/><br/>
<a href="#SBs"><font color=black /><u>SMILES profiles</u></a><br/><br/> <a href="#SB2d"><font color=black /><u>Surface accessibility</u></a><br/><br/><a href="#SB3d"><font color=black /><u>Secondary Structure</u></a><br/><br/>
</td>
<br/><br/></a><td valign=top><a href="#BPaa"><font color=black /><u>Binary Profiles</u></a><br/><br/><a href="#BPdpc"><font color=black /><u>PSSM Profiles</u></a><br/><br/><a href="#BPatc"><font color=black /><u>PhysicoChemical Properties</u></a><br><br><a href="#BPres"><font color=black /><u>AA-Index</u></a> <br><br><a href="#BPres"><font color=black /><u>Universal</u></a><br><br> </td>


</table>

<!-- <div class="wrapper">
<div style=color:black;>-->
<table align="center" bgcolor="">
<tr><td><h2 align=center> <FONT  Size=6><u>Composition<A name="Search Module"></A></u></FONT></h2></td></tr>
<tr bgcolor="#ff0000"><td align="justify"><br/><a name="aac"></a><b><u<h2>1. SIMPLE</h2></u></b><br>
<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>1.1 Amino Acid Composition</u></b><br>
This module displays the simple search page of PFeature. Clicking on the required field will allow the user to browse the specific information in the database. The "select fields to be searched" section provides options for various keywords through which search can be made in PFeature. User can select fields to be displayed from the section "fields to be displayed". User can click on each cancerPDF ID to get all the details about a entry. User can also click on each peptide to know information about that peptide. 
<br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_Simple_Amino_Acid/aac_Whole.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>

<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>




<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="dpc"></a><b><u>1.2  Dipeptide Composition</u></b><br>This module displays the simple search page of PFeature. Clicking on the required field will allow the user to browse the specific information in the database. The "select fields to be searched" section provides options for various keywords through which search can be made in PFeature. User can select fields to be displayed from the section "fields to be displayed". User can click on each cancerPDF ID to get all the details about a entry. User can also click on each peptide to know information about that peptide. <br/><br/></td></tr>

<tr><td><img src="images/Help_folder/Composition_Simple_DiPeptide/dpc_whole.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><img src="images/Help_folder/Composition_Simple_DiPeptide/dpc_gap.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>

<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>

<tr bgcolor=#F8F7D7><td align ="justify"><br/><a name="#"></a><b><u>1.3 Tripeptide Composition</u></b><br>This module provides facility to search a given query peptide against PFeature. It has two options containing and exact. Containing will fetch all the peptides that contain query peptide. Exact match will return only peptide entries that are exact to query peptide. <br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_Simple_TPC/TPC.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td><br><a name="#"></a><b><u>1.4 Atomic Composition</u></b><br>This page provides the advanced search facility in PFeature. User can browse the page by selecting two or more than two fileds. <br/><br/></td></tr>
<tr><td>Complex Search is quite helpful when user has predefined query in mind. For instance, User come up with the following questions in mind and wants to SEARCH</td></tr>

<tr><td><img src="images/Help_folder/Composition_Simple_Atomic/atc_whole.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor="#ff0000"><td align="justify"><br/><a name="pc"></a><b><u<h2>2. Physico-Chemical Properties</h2></u></b><br>
<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>2.1 Standard Properties</u></b><br>
This module of Pfeature compute the 19 standard Physicochemical properties like polarity, charge, hydrophilicity etc for given Protein or Peptide sequences. User need to paste sequences as single line or fasta format in provided text area where user can also upload file using "Browse" option containing sequences. Further, user need to select portion of sequences (i.e. Whole sequence/N-Terminal/C-Terminal/Splits of sequences or Rest sequences after removing desired N-terminal and C-terminal portions from sequences) for which he want to calculate physicochemical properties. In addition, User can also select desired properties. Eventually User need click on "Submit" button to compute desired properties. Result page will display all results for all sequences. Finally user can also download results in CSV format by clicking on "Click Here" option provided for download. 
<br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_PhyicoChemical/All.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>2.2 AA-Index</u></b><br>
This module of Pfeature compute the AA-Index for given Protein or Peptide sequences.First, user need to paste sequences as single line or fasta format in provided text area. User can also upload file using "Browse" option containing sequences. Further, user need to paste AA-Index accession numbers (separated by commas) from given list in provied text area. Eventually user need click on "Submit" button to compute desired properties. Result page will display all results for all sequences. Finally user can also download results in CSV format by clicking on "Click Here" option provided for download. 
<br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_PhyicoChemical/All.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>2.3 Advanced Properties</u></b><br>
This module of Pfeature compute the 5 Z-Score properties like Z1,Z2 or Z3  etc for given Protein or Peptide sequences. User need to paste sequences as single line or fasta format in provided text area where user can also upload file using "Browse" option containing sequences. Further, user need to select portion of sequences (i.e. Whole sequence/N-Terminal/C-Terminal/Splits of sequences or Rest sequences after removing desired N-terminal and C-terminal portions from sequences) for which he want to calculate physicochemical properties. In addition, User can also select desired properties. Eventually User need click on "Submit" button to compute desired properties. Result page will display all results for all sequences. Finally user can also download results in CSV format by clicking on "Click Here" option provided for download. 
<br/><br/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr><td><img src="images/Help_folder/Composition_PhyicoChemical/All.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>

<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>2.4 Structral Properties</u></b><br>
This module of Pfeature compute the 6 structural Physicochemical properties like Secondary Structure(Helix),Secondary Structure(Coil) and Solvent Accessibilty (Buried) etc for given Protein or Peptide sequences. User need to paste sequences as single line or fasta format in provided text area where user can also upload file using "Browse" option containing sequences. Further, user need to select portion of sequences (i.e. Whole sequence/N-Terminal/C-Terminal/Splits of sequences or Rest sequences after removing desired N-terminal and C-terminal portions from sequences) for which he want to calculate physicochemical properties. In addition, User can also select desired properties. Eventually User need click on "Submit" button to compute desired properties. Result page will display all results for all sequences. Finally user can also download results in CSV format by clicking on "Click Here" option provided for download. 
<br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_PhyicoChemical/All.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor="#ff0000"><td align="justify"><br/><a name="rd"></a><b><u<h2>3. REPEATS DISTRIBUTION</h2></u></b><br>
<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>3.1 Residue Repeats</u></b><br>This module displays the simple search page of PFeature. Clicking on the required field will allow the user to browse the specific information in the database. The "select fields to be searched" section provides options for various keywords through which search can be made in PFeature. User can select fields to be displayed from the section "fields to be displayed". User can click on each cancerPDF ID to get all the details about a entry. User can also click on each peptide to know information about that peptide. <br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_Repeats Distribution_Residue Repeats/RRAA_Whole.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>



<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>3.2 Property Repeats</u></b><br>This module displays the simple search page of PFeature. Clicking on the required field will allow the user to browse the specific information in the database. The "select fields to be searched" section provides options for various keywords through which search can be made in PFeature. User can select fields to be displayed from the section "fields to be displayed". User can click on each cancerPDF ID to get all the details about a entry. User can also click on each peptide to know information about that peptide. <br/><br/></td></tr>

<tr><td><img src="images/Help_folder/Composition_Simple_DiPeptide/dpc_whole.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>


<tr bgcolor=#F8F7D7><td align ="justify"><br/><a name="#"></a><b><u>3.3 Distance Distribution of Residue</u></b><br>This module provides facility to search a given query peptide against PFeature. It has two options containing and exact. Containing will fetch all the peptides that contain query peptide. Exact match will return only peptide entries that are exact to query peptide. <br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_Simple_TPC/TPC.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor="#ff0000"><td align="justify"><br/><a name="se"></a><b><u<h2>4. SHANNON ENTROPY</h2></u></b><br>
<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>4.1 Protein Level</u></b><br>This module displays the simple search page of PFeature. Clicking on the required field will allow the user to browse the specific information in the database. The "select fields to be searched" section provides options for various keywords through which search can be made in PFeature. User can select fields to be displayed from the section "fields to be displayed". User can click on each cancerPDF ID to get all the details about a entry. User can also click on each peptide to know information about that peptide. <br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_Repeats Distribution_Residue Repeats/RRAA_Whole.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>


<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>



<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>4.2 Residue level</u></b><br>This module displays the simple search page of PFeature. Clicking on the required field will allow the user to browse the specific information in the database. The "select fields to be searched" section provides options for various keywords through which search can be made in PFeature. User can select fields to be displayed from the section "fields to be displayed". User can click on each cancerPDF ID to get all the details about a entry. User can also click on each peptide to know information about that peptide. <br/><br/></td></tr>

<tr><td><img src="images/Help_folder/Composition_Simple_DiPeptide/dpc_whole.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>


<tr bgcolor=#F8F7D7><td align ="justify"><br/><a name="#"></a><b><u>4.3 Physico-chemical Properties</u></b><br>This module provides facility to search a given query peptide against PFeature. It has two options containing and exact. Containing will fetch all the peptides that contain query peptide. Exact match will return only peptide entries that are exact to query peptide. <br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_Simple_TPC/TPC.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>

<tr bgcolor="#ff0000"><td align="justify"><br/><a name="mc"></a><b><u<h2>5. MISCELLANEOUS</h2></u></b><br>
<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>5.1 Autocorrelation</u></b><br>This module displays the autocorrelation page of ‘Simple:Miscellaneous’ category. User can compute three autocorrelation descriptors viz. Normalized Moreau-Broto, Moran and Geary descriptors as formulated in the literature. Users can either paste the protein/ peptide sequences in single line format or FASTA format in the text area OR can upload a .csv file with the same formatting. A d or lag value has to be chosen by the user (less than or equal to the length of sequence/ sub-sequence) from the dropdown. User also has to provide comma separated aaindices of the properties for which the descriptors are to be estimated as given in the example (paste example option). In addition to whole sequence (default), the autocorrelation descriptors can be calculated for N-terminal, C-terminal, split sequences by choosing the field and entering the desired value in the textboxes provided. After submission of the form, the results are displayed and a download option is provided. Following is a visual description for the same task: <br/><br/></td></tr>
<tr><td><img src="images/autocorr.png"  width=500%; alt="Pic-1"><br/><br/><hr/></td></tr>


<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>



<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>5.2 Conjoint Triad Descriptors</u></b><br>This module displays the simple search page of PFeature. Clicking on the required field will allow the user to browse the specific information in the database. The "select fields to be searched" section provides options for various keywords through which search can be made in PFeature. User can select fields to be displayed from the section "fields to be displayed". User can click on each cancerPDF ID to get all the details about a entry. User can also click on each peptide to know information about that peptide. <br/><br/></td></tr>

<tr><td><img src="images/Help_folder/Composition_Simple_DiPeptide/dpc_whole.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>


<tr bgcolor=#F8F7D7><td align ="justify"><br/><a name="#"></a><b><u>5.3 Composition Transition</u></b><br>This module provides facility to search a given query peptide against PFeature. It has two options containing and exact. Containing will fetch all the peptides that contain query peptide. Exact match will return only peptide entries that are exact to query peptide. <br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_Simple_TPC/TPC.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>

<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>5.4 Pseudo Amino Acid Composition</u></b><br>This module displays the simple search page of PFeature. Clicking on the required field will allow the user to browse the specific information in the database. The "select fields to be searched" section provides options for various keywords through which search can be made in PFeature. User can select fields to be displayed from the section "fields to be displayed". User can click on each cancerPDF ID to get all the details about a entry. User can also click on each peptide to know information about that peptide. <br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_Repeats Distribution_Residue Repeats/RRAA_Whole.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor="#F8F7DF"><td align="justify"><br/><a name="#"></a><b><u>5.5 Amphiphilic Pseudo-amino acid compositions</u></b><br>This module displays the simple search page of PFeature. Clicking on the required field will allow the user to browse the specific information in the database. The "select fields to be searched" section provides options for various keywords through which search can be made in PFeature. User can select fields to be displayed from the section "fields to be displayed". User can click on each cancerPDF ID to get all the details about a entry. User can also click on each peptide to know information about that peptide. <br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_Simple_DiPeptide/dpc_whole.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td align ="justify"><br/><a name="#"></a><b><u>5.6 Quasi-sequence-order</u></b><br>This module provides facility to search a given query peptide against PFeature. It has two options containing and exact. Containing will fetch all the peptides that contain query peptide. Exact match will return only peptide entries that are exact to query peptide. <br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_Simple_TPC/TPC.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td align ="justify"><br/><a name="#"></a><b><u>5.7 Sequence-order Coupling</u></b><br>This module provides facility to search a given query peptide against PFeature. It has two options containing and exact. Containing will fetch all the peptides that contain query peptide. Exact match will return only peptide entries that are exact to query peptide. <br/><br/></td></tr>
<tr><td><img src="images/Help_folder/Composition_Simple_TPC/TPC.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>

<tr><td><h2 align = "center"><FONT Size=6><u>Binary Profiles<A name="BP"></A></u></FONT></h2></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td><br><a name="BPaa"></a><b><u>1. AMINO ACID</u></b><br>This page provides the user to get the list of total number of peptides according to a particular cancer type.<br/><br/></td></tr>
<tr><td><img src="images/cancer.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td>Result</td></tr>
<tr><td><img src="images/cancer_res.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td><br><a name="BPdpc"></a><b><u>2. DIPEPTIDE</u></b><br>This page provides the user to get the list of all the protein names in the database and clicking.<br/><br/></td></tr>
<tr><td><img src="images/protein.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td>Result</td></tr>
<tr><td><img src="images/protein_res.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td><br><a name="BPatc"></a><b><u>3. ATOMIC</u></b><br><br/>This module displays the peptides present according to the different biofluids in the database. By clicking the different menu user can get number and additional details about the type of peptide selected. <br/></td></tr>  
<tr><td><img src="images/browsefluid2.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td>Result</td></tr>
<tr><td><img src="images/browse3.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td><br><a name="BPres"></a><b><u>4. RESIDUE PHYSICO-CHEMICAL PROPERTIES</u></b><br>This page provides the user to get the list of total number of Peptides differentially regulated in Cancer Patient's Sample as compare to the Healthy Individuals.<br/><br/></td></tr>
<tr><td><img src="images/reg.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td>Result</td></tr>
<tr><td><img src="images/reg_res.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr><td><h2 align = "center"><FONT Size=6><u>Evolutionary information<A name="EI"></A></u></FONT></h2></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td><br><a name="EIpp"></a><b><u>1. PSSM PROFILE</u></b><br>This page provides the user to get the list of total number of peptides according to a particular cancer type.<br/><br/></td></tr>
<tr><td><img src="images/cancer.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td>Result</td></tr>
<tr><td><img src="images/cancer_res.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td><br><a name="EIpn"></a><b><u>2. PSSM NORMALIZATION</u></b><br>This page provides the user to get the list of all the protein names in the database and clicking.<br/><br/></td></tr>
<tr><td><img src="images/protein.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td>Result</td></tr>
<tr><td><img src="images/protein_res.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td><br><a name="EIpc"></a><b><u>3. PSSM COMPOSITION</u></b><br><br/>This module displays the peptides present according to the different biofluids in the database. By clicking the different menu user can get number and additional details about the type of peptide selected. <br/></td></tr>
<tr><td><img src="images/browsefluid2.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td>Result</td></tr>
<tr><td><img src="images/browse3.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>


<tr><td><h2 align = "center"><FONT Size=6><u>Structure based<A name="SB"></A></u></FONT></h2></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td><br><a name="SB2d"></a><b><u>1. PaDEL-2D DESCRIPTORS</u></b><br>This page provides the user to get the list of total number of peptides according to a particular cancer type.<br/><br/></td></tr>
<tr><td><img src="images/cancer.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td>Result</td></tr>
<tr><td><img src="images/cancer_res.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td><br><a name="SB3d"></a><b><u>2.  PaDEL-3D DESCRIPTORS</u></b><br>This page provides the user to get the list of all the protein names in the database and clicking.<br/><br/></td></tr>
<tr><td><img src="images/protein.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td>Result</td></tr>
<tr><td><img src="images/protein_res.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td><br><a name="SBfp"></a><b><u>3. FINGER PRINTS</u></b><br><br/>This module displays the peptides present according to the different biofluids in the database. By clicking the different menu user can get number and additional details about the type of peptide selected. <br/></td></tr>
<tr><td><img src="images/browsefluid2.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td>Result</td></tr>
<tr><td><img src="images/browse3.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>
<tr bgcolor=#F8F7D7><td><br><a name="SBs"></a><b><u>4. SMILES</u></b><br>This page provides the user to get the list of total number of Peptides differentially regulated in Cancer Patient's Sample as compare to the Healthy Individuals.<br/><br/></td></tr>
<tr><td><img src="images/reg.png"  width=100%; alt="Pic-1"><br><hr/></td></tr>
<tr><td>Result</td></tr>
<tr><td><img src="images/reg_res.png"  width=100%; alt="Pic-1"><br/><br/><hr/></td></tr>
<tr><td><div align=right><a href="#top">Top <i class="fa fa-chevron-up"></a></div></td></tr>

</table>

<tr><td >
<table width=100%  bgcolor=""><tr bgcolor=#F8F7D7><td><a name="faq"><h2 align="center"><FONT color=BLACK Size=6><u>Frequently Asked Questions (FAQs)<A name="FAQ"></A></u></FONT></h2></td></tr></table></td></tr>
<tr><td>
<table align="right" bgcolor=""><tr><td>

<br>
<B><FONT size=4>Q1.</FONT>  What is PFeature?</B><br>

   Ans.Pfeature is a comprehensive web server, which integrate numerous modules to compute most of the protein features that have been discovered over the past decades. In this Webserver, we have integrated modules to generate five major categories of protein/peptide features: i) Composition-based features, ii) Binary profile of sequences, iii) evolutionary information based features, iv) structural descriptors, and v)Pattern based features; for a group of protein/peptide sequences.

<br><B>Q2. Why PFeature?</B><br>
   Ans. Pfeature is a comprehensive web server which will allow users to compute most of the protein features include i) Composition-based features, ii) Binary profile of sequences, iii) evolutionary information based features, iv) structural descriptors, and v)Pattern based features. Additionally, users will also be able to generate these features for sub-parts of protein/peptide sequences. This will be helpful to annotate structure, function and therapeutic properties of proteins.  
<br><br> 
</td></tr></table>
</td></tr>

</table>
</div>
</main>
</div>
<?php include "footer.html"?>
