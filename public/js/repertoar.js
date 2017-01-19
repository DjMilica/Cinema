


var id;
$(".reservation").click(function() {
    id = $(this).parent().attr('id').split("_").pop();
    $("input[name^=_method]").val("GET");
    $("#showForm").attr("action", window.location + "/" + id + "/edit");
    $("#showButton").click();
});