
jQuery(document).ready(function($){
    $('[data-subscribe]').lsSubscribe();
    $('[data-unsubscribe]').lsSubscribe({
        onUnsubscribe:function(e, n){
            console.log(e, n)
        }
    });
});

