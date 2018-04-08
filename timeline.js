/*
 * timeline.js, version 1.0
 *
 *Following Henry Brown's idea, but modified, updated to jquery 2.0.3 and customized.
 *Thanks for Henry! http://henry.brown.name
 *
 */

function lifePercentage(a, b, c, d) {
    var e = percentageTime(a, b, c, 2);
    var f = absoluteTime(a, b);
}

function percentageTime(a, b, c, d) {
    var e = c.getTime() - a.getTime();
    var f = b.getTime() - a.getTime();
    var g = c.getTime() - b.getTime();
    var h = (f / e * 100).toFixed(d);
    return h
}

function absoluteTime(a, b) {
    var c = b.getTime() - a.getTime();
    var d = {
        years: Math.floor(c / 1e3 / 60 / 60 / 24 / 365),
        days: Math.floor(c / 1e3 / 60 / 60 / 24),
        hours: Math.floor(c / 1e3 / 60 / 60),
        minutes: Math.floor(c / 1e3 / 60),
        seconds: Math.floor(c / 1e3),
        milliseconds: a.getTime() - b.getTime()
    };
    return d
}

function loadNotes() {
    $.ajax({
        type: "POST",
        url: "timeline-notes-en.json",
        dataType: "json",
        error: function (a) {},
        success: function (a) {
            var a = a;
            timelineSetup(a)
        }
    })
}

function timelineSetup(a) {
    $("#progress-bar-container .knotch").remove();
    $("#progress-bar-container .notes").empty();
    containerWidth = parseInt($("#progress-bar-container").width());
    progressWidth = containerWidth - 140;
    notesWidth = progressWidth - 30;
    $(".progress-bar").css({
        width: progressWidth
    });
    $(".progress-bar .notes").css({
        width: notesWidth
    });
    $("#about").css("overflow", "visible");
    addNotes(a)
}

function addNotes(a) {
    results = a;
    var b = "";
    for (var c = 0; c < results.lifeevents.event.length; c++) {
        b += "<li";
        if (c % 2 == 0) {
            b += ' class="top"'
        } else {
            b += ' class="bottom"'
        }
        b += ">";
        b += '<div class="caption">';
        b += '<div class="arrow"></div>';
        b += '<h4 class="heading">' + results.lifeevents.event[c].title + "</h4>";
        b += '<p class="date">' + results.lifeevents.event[c].date + "<p>";
        b += '<p class="description">' + results.lifeevents.event[c].description + "</p>";
        b += "</div>";
        b += "</li>"
    }
    $(".progress-bar .notes").prepend(b);
    $(".progress-bar .notes li").each(function () {
        var a = new Date($(this).find(".date").html());
        var b = percentageTime(birth, a, present, 20);
        var c = $(".progress-bar .notes").width();
        var b = c * (b / 100) - 14;
        var d = c - 350;
        if (parseInt(b) > d) {
            var e = parseInt(b) - d;
            $(this).find(".caption").css({
                left: -e
            });
            $(this).find(".caption .arrow").css({
                left: e + 10
            })
        } else {}
        $(this).css("left", b);
        if ($(this).attr("class") == "top") {
            var f = $(this).find(".caption").height();
            $(this).find(".caption").css("top", -f - 30)
        }
    });
    for (var d = 0; d < a.lifeevents.event.length; d++) {
        var e = '<span class="knotch ';
        if (d % 2 == 0) {
            e += "top"
        } else {
            e += "bottom"
        }
        e += '">';
        e += '<p class="date">' + a.lifeevents.event[d].date + "</p>";
        e += "</span>";
        $(".progress-bar").prepend(e)
    }
    $(".progress-bar .knotch").each(function () {
        var a = new Date($(this).find(".date").html());
        var b = percentageTime(birth, a, present, 20);
        var c = $(".progress-bar .notes").width();
        var b = c * (b / 100) - 7;
        $(this).css("left", b)
    })
}
var birth = new Date("1979/09/12 06:12:00");
var present = new Date;
var death = new Date("2067/08/09 01:00:00");

$(document)
    .ready(function () {
        loadNotes();

        $(document)
            .on('mouseover', '.progress-bar .notes li.bottom', function () {
                $(this)
                    .animate({
                        top: 24
                    }, 200, function () {
                        $(this)
                            .find(".caption")
                            .stop(true, true)
                            .fadeIn(200)
                    })
            })
            .on('mouseout', '.progress-bar .notes li.bottom', function () {
                $(this)
                    .stop(true, true)
                    .find(".caption")
                    .stop(true, true)
                    .delay(200)
                    .fadeOut(400, function () {
                        $(this)
                            .parents("li")
                            .animate({
                                top: 30
                            }, 200)
                    })
            });


        $(document)
            .on('mouseover', '.progress-bar .notes li.top', function () {
               $(this)
                    .animate({
                        top: -48
                    }, 200, function () {
                        $(this)
                            .find(".caption")
                            .stop(true, true)
                            .fadeIn(200)
                    });
            })
            .on('mouseout', '.progress-bar .notes li.top', function () {
                $(this)
                    .stop(true, true)
                    .find(".caption")
                    .stop(true, true)
                    .delay(200)
                    .fadeOut(400, function () {
                        $(this)
                            .parents("li")
                            .animate({
                                top: -55
                            }, 200)
                    })
            });


    });
$(window).resize(function () {
    loadNotes()
})