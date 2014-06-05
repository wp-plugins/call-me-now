jQuery(function($) {
    function cmnCheckPhonenumber(b) {
        var a = b.val().replace(/-| /g, "");
        var d = $(b).prevAll('.cmn-error').first();
        if (a == "") {
            d.html('Geen telefoonnummer ingevuld');
            d.show();
            b.focus();
            return false
        } else {
            if (a.length < 8 || a.length > 12) {
                d.html('Ongeldig telefoonnummer ingevuld');
                d.show();
                b.focus();
                return false
            } else {
                if (a.charAt(1) == 8) {
                    d.html('Geen servicenummers toegestaan');
                    d.show();
                    b.focus();
                    return false
                } else {
                    if (a.charAt(1) == 9) {
                        if (a.substring(2, 4) == 91) {
                            d.html('');
                            d.hide();
                            return true
                        } else {
                            d.html('Geen servicenummers toegestaan');
                            d.show();
                            b.focus();
                            return false
                        }
                    } else {
                        if (a.charAt(0) != "+" && a.charAt(0) != 0) {
                            d.html('Ongeldig telefoonnummer ingevuld');
                            d.show();
                            b.focus();
                            return false
                        } else {
                            d.html('');
                            d.hide();
                            return true
                        }
                    }
                }
            }
        }
    }

    $(".cmn-form").submit(function(c) {
        var b = cmnCheckPhonenumber($(this).find(".cmn-phonenumber"));
        var a = $(this).attr("action");
        var element = this;
        if (!b) {
            c.preventDefault();
        } else {
            window.open("", "callmenowpopup", "width=460, height=500, location=no, directories=no, titlebar=no, toolbar=no,menubar=no,status=no,resizable=no,scrollbars=no");
            element.target = "callmenowpopup";
            element.submit();
        }
    });
});