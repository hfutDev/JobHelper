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

    //联系方式弹窗
    var $contact = $('#contact');
    if(!$contact) return false;
    else{
        $contact.bind('tap',function(){
            $('#dialog').css('display','block');
        });
    }

    //触摸联系方式，将联系方式复制到粘贴板
    //zeroclip拷贝组件调用
    var clip = new ZeroClipboard($('.dialog-inner li'));
    clip.on("ready", function() {
        this.on("aftercopy", function(event) {
            var menu = event.target.innerHTML;
            alert(menu + "号：" + event.data["text/plain"] +"已复制到粘贴板");
            $('#dialog').css('display','none');
        });
    });

    clip.on("error", function(event) {
        $('#dialog').css('display','none');
        ZeroClipboard.destroy();
    });
});

