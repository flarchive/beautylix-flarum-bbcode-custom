
<script type="text/javascript">

function changeImage( ) {

    var ClassNum = document.getElementsByClassName("imgClickAndChange");
    var i;
    for (i = 0; i < ClassNum.length; i++) {
    

var elems = document.getElementsByClassName("imgClickAndChange")[i].src;


var newurl = elems.replace('base', '');

document.getElementsByClassName("imgClickAndChange")[i].src = newurl;


//var newelems = document.getElementsByClassName("imgClickAndChange")[i].src;


}

}


</script>

