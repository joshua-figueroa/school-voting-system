function select(res, name, id1, id2) {
    var id1_1 = id1.toLowerCase()
    var id2_1 = id2.toLowerCase()
    var input = "input[name='" + name + "']"
    $(document).on("click", input, function() {
        thisRadio = $(this);
    
        if(thisRadio[0].id == id1_1) {
            if(thisRadio.hasClass('checked')) {
                thisRadio.removeClass('checked');
                thisRadio.addClass('unchecked');
                thisRadio.prop('checked', false);
                $(res).html("");
            }
            else {
                thisRadio.removeClass('unchecked');
                thisRadio.addClass("checked");
                thisRadio.prop('checked', true);
                $(res).html(id1);
            }
            $(`#${id2_1}`).prop('checked', false);
            $(`#${id2_1}`).addClass("unchecked");
            $(`#${id2_1}`).removeClass("checked");
        }
        else {
            if(thisRadio.hasClass('checked')) {
                thisRadio.removeClass('checked');
                thisRadio.addClass('unchecked');
                thisRadio.prop('checked', false);
                $(res).html("");
            }
            else {
                thisRadio.prop('checked', true);
                thisRadio.removeClass('unchecked');
                thisRadio.addClass("checked");
                $(res).html(id2);
            }
            $(`#${id1_1}`).prop('checked', false);
            $(`#${id1_1}`).addClass("unchecked");
            $(`#${id1_1}`).removeClass("checked");
        }
    })
}

select("#anime-string", "anime", "Naruto", "Sasuke")
select("#cc-string","credit-card", "Visa", "MasterCard")