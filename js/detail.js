/**
 * Created by cassie on 15/1/24.
 */
$(document).ready(function () {
    //点赞
    var $zan = $('.zan');
    var zanNum = $('.zan label').innerHTML;
    if (!$zan) return false;
    if ($zan.length) {
        $zan.on('click', function () {
            $.ajax({
                type: 'POST',
                url: '../view/good.php',
                data: {
                    id: $('.zan label').data('id')
                }
            }).done(function (results) {
                console.log(results);
                if (results.res === 1) {
                    zanNum = zanNum+1;
                    $(this).find('label').html(zanNum);
                }
            })
        })
    }

    //联系方式
    $('#contact').tap(function(e){
        debugger;
        $('#dialog').css('display','block');
    });
});

