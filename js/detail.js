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
    var $contactLi = $('.dialog-inner li');
    if(!$contactLi) return false;
    else{
        $contactLi.bind('tap',function(e){
            var $target = $(e.target);
            var client = new ZeroClipboard($target);
            client.on("ready", function(readyEvent) {
                client.on("aftercopy", function(event) {
                    $('#dialog').css('display','none');
                    alert("QQ号：" + event.data["text/plain"] +"已复制到粘贴板");
                } );
            } );
        })
    }
});

