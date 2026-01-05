jQuery(function($) {

    if ($(window).width() >= 1025) {
        var flipbook = $("#flipbook");
        if (flipbook.length) { // flipbookが存在する場合のみ実行
            var currentPageHeight = 0; // 現在のページの高さを格納する変数
            console.log(flipbook);
    
            // 初期化時の処理
            function setFlipbookHeight() {
                var flipbookHeight = flipbook.children().height(); // 子要素の高さを取得
                flipbook.height(flipbookHeight); // 子要素の高さに基づいて #flipbook の高さを設定
            }
    
            // 初期化時に実行
            setFlipbookHeight();
    
            flipbook.turn({
                display: 'single',
                start: 1, // 最初のページを指定
                duration: 1200,
                autocenter: false,
            });
    
            // 次のページへ移動するボタンのクリックイベント
            $(document).on('click', '.btn_shop-wht-next', function () {
                var nextPage = flipbook.turn("page") + 1;
                flipbook.turn("page", nextPage);
                updatePageClasses(nextPage);
            });
    
            // 前のページへ移動するボタンのクリックイベント
            $(document).on('click', '.btn_shop-wht-prev', function () {
                var prevPage = flipbook.turn("page") - 1;
                flipbook.turn("page", prevPage);
                updatePageClasses(prevPage);
            });
    
            // ページのクラスを更新する関数
            function updatePageClasses(pageNumber) {
                $(".package_inner").removeClass("active");
                $(".package_inner.page" + pageNumber).addClass("active");
            }
        }
    }
    
    document.addEventListener('DOMContentLoaded', function () {
    
    });
});


// 有料版のアドバイスw

// jQuery(function($) {
//     var flipbook = $("#flipbook");

//     // 初期化時およびリサイズ時に実行する共通関数
//     function adjustHeight() {
//         var currentPage = flipbook.turn("page");
//         var currentHeight = $('.page' + currentPage).height();
//         flipbook.height(currentHeight);
//         $('.turn-page-wrapper').height(currentHeight);
//     }

//     flipbook.turn({
//         display: 'single',
//         start: 1,
//         duration: 1200,
//         autocenter: false,
//         turned: function(event, page, view) {
//             adjustHeight();
//         }
//     });

//     $(document).on('click', '.btn_shop-wht-next', function() {
//         flipbook.turn("next");
//         $("package_inner.page2").addClass('active');
//     });

//     $(document).on('click', '.btn_shop-wht-prev', function() {
//         flipbook.turn("previous");
//         $("package_inner.page2").removeClass('active');
//     });

//     $(window).resize(adjustHeight);
//     $(document).ready(adjustHeight);
// });