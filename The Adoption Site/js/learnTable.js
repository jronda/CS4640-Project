
// Used as refrences to create table function:
// https://developer.mozilla.org/en-US/docs/Web/API/Document_Object_Model/Traversing_an_HTML_table_with_JavaScript_and_DOM_Interfaces
// https://www.w3schools.com/howto/howto_js_filter_table.asp



function tableSearch() {

    var input = document.getElementById("Input");
    input = input.value.toUpperCase();
    var table = document.getElementById("learnTable");
    var tr = table.getElementsByTagName("tr");
    var len = tr.length;


    // loops through the table to hide those that don't match input
    for (var i = 0; i < len; i++) {
      var td = tr[i].getElementsByTagName("td")[0];
      if (td != null) {
        var entry = td.innerHTML.toUpperCase().indexOf(input);
        if (entry >= 0)
          tr[i].style.display = "";
        else
          tr[i].style.display = "none";
      }
    }

}
