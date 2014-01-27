<?php ?>
<script>

// This is to hide upload form after succesfull file upload, which is inside iframe
// parent document is called..betul kan ?

function hide(id){
        if (parent.document.getElementById){
            obj = parent.document.getElementById(id);
            obj.style.display = "none";
        }
}


</script>
<body onload="javascript:hide('uploadFrame')">
<?php ?>

