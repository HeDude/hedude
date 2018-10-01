function PopUp()
{
    var popup = document.getElementById( "myPopup" );
    popup.classList.toggle("show");
    var popupremove = document.getElementById( "myPopupRemove" );
    popupremove.classList.toggle( "show" );
}

$(document).ready
(
    function()
    {
        setTimeout
        (
            function()
            {
                PopUp();
            }
            ,
            1000
        );
    }
);
