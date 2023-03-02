$(document).ready(function () {
    //Vanilla Javascript

    const getReplies = (opinionId, thiss) => {
        $.ajax({
            type: "GET",
            url: `/opinions/${opinionId}/replies`,
            success: function (data) {

                setTimeout(function () {
                    thiss.css({opacity: '1', pointerEvents: 'all'});
                }, 270);
                let repliesContainer = $("[data-container=" + opinionId + "]");

            
                if ($("[data-repl=" + opinionId + "]").length) {
                    $(data.html).insertAfter($("[data-repl=" + opinionId + "]"));
                } else {
                    $(data.html).insertAfter(repliesContainer);
                }
            }
        });
    }

    $(".show-replies").on("click", function (e) {
        let parentContainer = $(e.target).closest(".comment__container");
        var parentContainer_2 = $(e.target).closest(".container");
        var childrenContainer_2 = parentContainer_2.find("[data-answer]");
        let _id = parentContainer.attr("id");
        var $this = $(this);
        if (_id) {

            let childrenContainer = $("[dataset=" + _id + "]");
            childrenContainer.slideToggle(250);
            childrenContainer_2.find(".reply__form").slideUp(240);
            if($(e.target).hasClass('getR')){
                $this.css({opacity: '.4', pointerEvents: 'none'});
                getReplies(_id, $this);
                $(e.target).removeClass('getR');
            }
            if (!$(childrenContainer).is(":hidden")) {
                setTimeout(function () {
                    childrenContainer_2.find(".reply__form").remove();
                }, 270);
            }
        }
    });

    $(".answer").on("click", (e) => {
        var parentId = $(e.target).data("parent-id");
        var _token = $('input[name="_token"]').val();

        $(e.target)
            .closest(".comment__container")
            .find(".answer")
            .css({ pointerEvents: "none" });
        let parentContainer = $(e.target).closest(".comment__container");
        let _id = parentContainer.attr("id");
        if (_id) {
            let childrenContainer = $("[data-answer=" + _id + "]").eq(0);
            let childrenContainer_1 = $("[dataset=" + _id + "]");
            childrenContainer_1.slideDown(250);
            let repliesContainer = $("[data-container=" + _id + "]");
                
            
            
      var reply_form =      $(
                `
                <div class="comment__container opened" data-repl="`+
                parentId +`">
<form class="reply__form" action="/reply" method="POST">
<input type="hidden" name="_token" value="` +
                    _token +
                    `">
<input type="hidden" name="opinion_id" value="` +
                    parentId +
                    `">

<div class="reply-form">
<div style="margin: auto; display: flex; justify-content: center;"><textarea class="reply-input" name="body" placeholder="Escribe tu respuesta aquí" minlength="12" required></textarea></div>
<div class="reply-actions">
<button type="submit" class="send-reply md-ripples ripples-bg-immer-weiss">Publicar respuesta</button>
  <button type="button" class="cancel-reply md-ripples ripples-bg-immer-weiss">Cancelar</button>
</div>
</div>
</form>
</div>`
            ).insertAfter(repliesContainer);
        }
    });

    $(document).on("submit", '.reply__form', () => {
        $('.send-reply').css({pointerEvents: 'none', opacity: '.4'}).prop('disabled', true);
    });

    $(document).on("click", ".cancel-reply", (e) => {
        let parentContainer = $(e.target).closest(".container");
        let childrenContainer = parentContainer.find("[data-repl]");

        parentContainer.find(".answer").css({ pointerEvents: "all" });
        replyEnabled = true;
        childrenContainer.slideUp(200);
        setTimeout(function () {
            childrenContainer.remove();
        }, 300);
    });

    $(document).on("click", ".report__flag", (e) => {
        let parentContainer = $(e.target).closest(".comment__container");
        let comment_type = $(parentContainer).data("type");
        let comment_id = $(parentContainer).data("commentid");

        $("#report_type").val(comment_type);
        $("#report_user").val(comment_id);
        $(".filter_background").fadeIn(250);
        $(".filter_back").fadeIn(250);
    });

    //For the likes and dislikes
    $(document).on("click", ".like-button", function () {
        $('.like-button').css({pointerEvents: 'none', opacity: '.5'});
        $('.dislike-button').css({pointerEvents: 'none', opacity: '.5'});
        var type = $(this).data("type");
        var id = $(this).data("commentid");
        var likeCount = $(this).find(".like-count");
        var dislikeCount = $(this).next().find('.dislike-count');

        console.log(type + '  y es el id: ' + id);


        $.ajax({
            url: "/reactions/like",
            method: "POST",
            data: {
                type: type,
                id: id,
                _token: $('input[name="_token"]').val(),
            },
            success: function (data) {
                    // Actualiza el contador de likes en el front-end
                          likeCount.text(data.like_count);
                          dislikeCount.text(data.dislike_count);
                          setTimeout(function(){
                            $('.like-button').css({pointerEvents: 'all', opacity: '1'});
                            $('.dislike-button').css({pointerEvents: 'all', opacity: '1'});
                          }, 1000);
                
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            },
        });
    });

    $(document).on("click", ".dislike-button", function () {
        $('.like-button').css({pointerEvents: 'none', opacity: '.5'});
        $('.dislike-button').css({pointerEvents: 'none', opacity: '.5'});
        var type = $(this).data("type");
        var id = $(this).data("commentid");
        var dislikeCount = $(this).find(".dislike-count");
        var likeCount = $(this).prev().find('.like-count');
        $.ajax({
            url: "/reactions/dislike",
            method: "POST",
            data: {
                type: type,
                id: id,
                _token: $('input[name="_token"]').val(),
            },
            success: function (data) {

                    // Actualiza el contador de dislikes en el front-end
                    likeCount.text(data.like_count);
                    dislikeCount.text(data.dislike_count);
                    setTimeout(function(){
                        $('.like-button').css({pointerEvents: 'all', opacity: '1'});
                        $('.dislike-button').css({pointerEvents: 'all', opacity: '1'});
                      }, 1000);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            },
        });
    });

    //End vanilla Javascript
    function openCustomSelect(dropDown, menu) {
        $(dropDown).on("click", function () {
            $(menu).slideToggle(200);
            $(dropDown).toggleClass("active").addClass("ve");
            $(dropDown).css({ pointerEvents: "none" });
            setTimeout(function () {
                $(dropDown).css({ pointerEvents: "all" });
            }, 350);
            if ($(dropDown).hasClass("active")) {
                $(".fondo-select-responsive").fadeIn(250).addClass("activ");
            } else {
                $(".fondo-select-responsive").fadeOut(250).removeClass("activ");
            }
        });
    }

    function detectClickOutsideBx(
        textbox,
        car,
        menu,
        search_content,
        search_input
    ) {
        $(window).click((clickOutsideBx) => {
            if (
                !clickOutsideBx.target.matches(textbox) &
                !clickOutsideBx.target.matches(car) &
                !clickOutsideBx.target.matches(search_content) &
                !clickOutsideBx.target.matches(search_input)
            ) {
                let textBox = $(textbox);
                let t;
                for (t = 0; t < textBox.length; t++) {
                    let textB = textBox[t];
                    if (textB.classList.contains("active")) {
                        $(".fondo-select-responsive")
                            .fadeOut(300)
                            .removeClass("activ");
                        setTimeout(function () {
                            $(menu).slideUp(250);
                            $(textbox).removeClass("active");
                            $(textbox).removeClass("ve");
                        }, 100);
                    }
                }
            }
        });
    }

    function getTheCurrentValue(contentValue, textBox, value_selected) {
        $(contentValue).each(function () {
            $(this).on("click", (e) => {
                $(textBox).html(e.currentTarget.innerHTML);
                $(value_selected).val(e.currentTarget.innerText);
            });
        });
    }

    openCustomSelect("#schedule_filter", "#schedule_option");
    getTheCurrentValue(".schedul", "#schedule_filter", "#report_reason");
    detectClickOutsideBx(
        "#schedule_filter",
        "#schedule_filter .car",
        "#schedule_option",
        "#search_period_cont",
        "#search_period"
    );

    $(".filter_background").on("click", () => {
        $(".filter_background").fadeOut(250);
        $(".filter_back").fadeOut(250);
    });
});
