// helper functions

function select(selector) {
  return document.querySelector(selector);
}

function selectAll(selector) {
  return document.querySelectorAll(selector);
}

// const
const body = document.body;
const header = select('.header');
const headerNav = select(".header_nav");
const headerLine = select(".header_line");
const headerLogo = select(".header_logo");
const myTarget = selectAll('[class*="fade-"]');
const topMvHeading = document.querySelector( '.mv_scroll_block .heading' );
const topMvHeadingLine = document.querySelector( '.mv_scroll_block .line' );

// functions

// intersection observer
function fadeIntersect(entries) {
entries.forEach((entry) => {
    const nowElement = entry.target;
    if (entry.isIntersecting) {
    nowElement.classList.add('fade-action');
    }
});
}

function fadeFn() {
const fadeFnOptions = {
    root: null,
    rootMargin: '0px 0px',
    threshold: 0.1,
};
const observerFadeFn = new IntersectionObserver(fadeIntersect, fadeFnOptions);
myTarget.forEach((element) => observerFadeFn.observe(element));
}


// headerのボタン（タブレット以下）
function headerLineToggle () {
  headerLine.addEventListener('click', () => {
    body.classList.toggle('ofh');
    headerLine.classList.toggle('click');
    headerNav.classList.toggle('active');
  });
}

// headerのプロパティ
function setHeaderStyles({ display, position, top, visibility, opacity, backgroundColor = '' }) {
  header.style.display = display;
  header.style.position = position;
  header.style.top = top;
  header.style.visibility = visibility;
  header.style.opacity = opacity;
  if (backgroundColor) header.style.backgroundColor = backgroundColor;
}

// header-logoのプロパティ
function setHeaderLogoStyles(
  { visibility, opacity }
) {
  headerLogo.style.visibility = visibility;
  headerLogo.style.opacity = opacity;
}

// GSAP アニメーション

const gsapMvTitle = gsap.timeline({
scrollTrigger: {
  trigger: ".mv",
  start: "top top",
  end: "bottom 50%", // トリガー要素の高さの50%で終了
  scrub: 1, // アニメーションの滑らかさを調整
}
});

const gsapMvBorder = gsap.timeline({
scrollTrigger: {
  trigger: ".mv",
  start: "top top",
  end: "bottom 50%", // トリガー要素の高さの50%で終了
  scrub: 1, // アニメーションの滑らかさを調整
}
});

gsapMvTitle.fromTo(
".mv_scroll_block .heading", // ターゲット
{ yPercent: 0, }, // 開始状態
{ yPercent: 360, }, // 終了状態
);

gsapMvBorder.fromTo(
".mv_scroll_block .line", // ターゲット
{ scale: 1 }, // 開始状態
{ scale: 0 }, // 終了状態
);

function topLoading() {
gsap.fromTo(
  ".mv_scroll_block .heading", 
  {
    yPercent: 100,
  },
  {
    yPercent: 0,
    duration: 1.5,
    ease: "Power4.out"
  },
);

gsap.fromTo(
  ".mv_scroll_block .line",
  {
    scale: 0
  },
  {
    scale: 1,
    duration: .5,
    ease: "Power2.out"
  },
);
}

// Lenis 慣性スクロール（トップのみ）

function lenisScroll() {

if( body.classList.contains('top') ) {
  const lenis = new Lenis();
  
  function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);
}
}

// 読み込み前のスタイル

if (topMvHeading) {
  topMvHeading.style.transform = 'translateY(-100%)';
}
if (topMvHeadingLine) {
  topMvHeadingLine.style.transform = 'scale(0, 0)';
}


document.addEventListener('DOMContentLoaded', (event) => {

// action
fadeFn();
lenisScroll();
headerLineToggle();


// setTimeOut

setTimeout(function() {
    var loadingElements = document.querySelectorAll('.loading');
    loadingElements.forEach(function(el) {
        el.style.transition = 'opacity 0.5s ease';
        el.style.opacity = 0;
        setTimeout(function() {
            el.style.display = 'none';
        }, 500);
    });
}, 2000);

setTimeout(function() {
    var loadingContentElements = document.querySelectorAll('.loading_content');
    loadingContentElements.forEach(function(el) {
        el.style.transition = 'opacity 0.5s ease';
        el.style.opacity = 0;
        setTimeout(function() {
            el.style.display = 'none';
            topLoading();
        }, 500);
    });
}, 3000);

}, false);

// スムーススクロール
document.addEventListener('DOMContentLoaded', function() {
  let pageHash = window.location.hash;
  if (pageHash) {
    let scrollToElement = document.querySelector('[data-id="' + pageHash + '"]');
    if (!scrollToElement) return;
    window.addEventListener('load', function() {
      history.replaceState(null, null, ' '); // URLに#を削除
      let targetOffset = scrollToElement.getBoundingClientRect().top + window.scrollY;
      let startTime = null;

      function ease(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
      }

      function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const duration = 1100; // アニメーションの時間（ミリ秒）
        const run = ease(timeElapsed, window.pageYOffset, targetOffset - window.pageYOffset, duration);
        window.scrollTo(0, run);
        if (timeElapsed < duration) {
          requestAnimationFrame(animation);
        }
      }

      requestAnimationFrame(animation);
    });
  }
});

// アコーディオンメニュー
const questions = Array.from(document.querySelectorAll(".question"));

for(let i=0; i< questions.length; i++){
  let question =  questions[i];
  let answer = question.nextElementSibling;
  
  question.addEventListener("click",()=>{
    question.classList.toggle("active"); // questionに対してactiveクラスをトグル
    if (answer.style.height) {
      answer.style.height = null;
    } else {
      answer.style.height = answer.scrollHeight + 'px';
    }
  });
}

// document.addEventListener("DOMContentLoaded", function() {
//   // 確認画面の要素を取得
//   var confirmationPage = document.querySelector('.confirm');

//   // 確認画面の要素が存在する場合のみ実行
//   if (confirmationPage) {
//     // お問い合わせ種別を取得
//     var category = document.querySelector('.category td p').textContent.trim();
//     // semi_order_detail要素を取得
//     var semiOrderDetail = document.querySelector('.semi_order_detail');

//     // お問い合わせ種別が "セミオーダー家具について" の場合
//     if (category === "セミオーダー家具について") {
//         // semi_order_detail要素を表示
//         semiOrderDetail.style.display = 'block';
//     } else {
//         // それ以外の場合、semi_order_detail要素を非表示
//         semiOrderDetail.style.display = 'none';
//     }
//   }
// });

