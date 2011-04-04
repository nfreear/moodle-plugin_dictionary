Installation

1.  Copy the filter/dictionary folder in the zip file into your moodle root/filter folder.
2.	Copy the blocks/dictionary forlder in the zip file into your moodle root/blocks folder
3.	In your theme, add the following line in the header.html
	<script Xlanguage="JavaScript" type="text/javascript" src="/filter/dictionary/dictionary.php"></script>
4. 	Login as administrator. In the site administration block select Modules->Filters->Manage filters
5.	Enable the dictionary filter by clicking on the closed eye.

Using the filter

Adding or modifying dictionaries

You can add or modify dictionaries by clicking on the settings link. 
1.	Give a name for the dictionary so that it is easily recognizable. For example, Dictionary.com
2.	In the filter_dictionary_uri(x) field you must enter the link used by the dictionary website to search for words. 
	For Example: Go to dictionary.com and put the word "culture" in the search box and then click search. 
	Notice the uri in the address bar of your browser. It should read "http://dictionary.reference.com/browse/culture". 
	Copy the uri without the word "culture" so that you have the following uri: "http://dictionary.reference.com/browse/" 
	and paste it in the filter_dictionary_uri(x) field. 

Enabling the filter in a course.

1.	In the course in which you want to use the dictionary filter, click on "Turn editing on".
2.	Add the dictionary block.
3.	In the Dictionary block, click on "Change dictionary"
4.	Select the dictionary that you would like to use for the course.

From that point on, when ever a Resource using Moodle formating, such as compose a web page, is used, double clicking on any word within
that resource will pop up the definition from the selected dictionary.

Enjoy.

Patrick Thibaudeau	
