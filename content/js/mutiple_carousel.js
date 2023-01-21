const listBox = document.querySelectorAll('.mathang1');
const wrapperBox = document.querySelector('.mathang');
const btnLeft = document.querySelector('.btnLeft');
const btnRight = document.querySelector('.btnRight');
const reviewDiv = document.querySelector('.noidung2');

if (wrapperBox) {
document.addEventListener('DOMContentLoaded', function () {
 // responsive
 window.addEventListener('resize', function () {
    if (window.innerWidth >= 1200) {
        make_slide(3);
    } else if (window.innerWidth >= 992) {
        make_slide(2);
    } else {
        make_slide(1);
    }
});

const media = [
    window.matchMedia('(min-width: 1366px)'),
    window.matchMedia('(min-width: 992px)'),
];

if (media[0].matches) {
    make_slide(3);
} else if (media[1].matches) {
    make_slide(2);
} else {
    make_slide(1);
}
});

function make_slide(amountSlideAppear) {
// set width and margin for item slide
const widthItemAndMargin = 150;
let widthAllBox = widthItemAndMargin * listBox.length;
wrapperBox.style.width = `${widthAllBox}px`;

listBox.forEach((element) => {
    element.style.marginRight = '20px';
    element.style.width = `${widthItemAndMargin - 20}px`;
});

// handle slide
let count = 0;
let spacing = widthAllBox - amountSlideAppear * widthItemAndMargin;
btnRight.addEventListener('click', function () {
    count += widthItemAndMargin;

    if (count > spacing) {
        count = 0;
    }
    wrapperBox.style.transform = `translateX(${-count}px)`;
});

btnLeft.addEventListener('click', function () {
    count -= widthItemAndMargin;

    if (count < 0) {
        count = spacing;
    }
    wrapperBox.style.transform = `translateX(${-count}px)`;
});
}
}

// ========sản phẩm hot============
const listBox1 = document.querySelectorAll('.sanphamhot1');
const wrapperBox1 = document.querySelector('.sanphamhotchinh');
const btnLeft1 = document.querySelector('.btnLeft1');
const btnRight1 = document.querySelector('.btnRight1');
const reviewDiv1 = document.querySelector('.sanphamhotchinh1');

if (wrapperBox1) {
document.addEventListener('DOMContentLoaded', function () {
 // responsive
 window.addEventListener('resize', function () {
    if (window.innerWidth >= 1366) {
        make_slide1(3);
    } else if (window.innerWidth <= 992) {
        make_slide1(2);
    }else {
        make_slide1(1);
    }
});

const media1 = [
    window.matchMedia('(min-width: 1366px)'),
    window.matchMedia('(min-width: 992px)'),
    window.matchMedia('(min-width: 682px)'),
];

if (media1[0].matches) {
    make_slide1(4);
} else if (media1[1].matches) {
    make_slide1(3);
} else if (media1[2].matches) {
    make_slide1(2);
}else {
    make_slide1(1);
}
});

function make_slide1(amountSlideAppear1) {
// set width and margin for item slide
const widthItemAndMargin1 = 220;
let widthAllBox1 = widthItemAndMargin1 * listBox1.length;
wrapperBox1.style.width = `${widthAllBox1}px`;

listBox1.forEach((element) => {
    element.style.marginRight = '20px';
    element.style.width = `${widthItemAndMargin1 - 20}px`;
});

// handle slide
let count = 0;
let spacing = widthAllBox1 - amountSlideAppear1 * widthItemAndMargin1;
btnRight1.addEventListener('click', function () {
    count += widthItemAndMargin1;

    if (count > spacing) {
        count = 0;
    }
    wrapperBox1.style.transform = `translateX(${-count}px)`;
});

btnLeft1.addEventListener('click', function () {
    count -= widthItemAndMargin1;

    if (count < 0) {
        count = spacing;
    }
    wrapperBox1.style.transform = `translateX(${-count}px)`;
});
}
}
// ========Gợi ý hôm nay============
const listBox2 = document.querySelectorAll('.goiyhomnaytb1');
const wrapperBox2 = document.querySelector('.goiyhomnaytrungbay');
const btnLeft2 = document.querySelector('.btnLeft2');
const btnRight2 = document.querySelector('.btnRight2');
const reviewDiv2 = document.querySelector('.goiyhomnaytrungbay1');
if (wrapperBox2) {
document.addEventListener('DOMContentLoaded', function () {
 // responsive
 window.addEventListener('resize', function () {
    if (window.innerWidth >= 1200) {
        make_slide2(3);
    } else if (window.innerWidth <= 992) {
        make_slide2(2);
    }else {
        make_slide2(1);
    }
});

const media2 = [
    window.matchMedia('(min-width: 1200px)'),
    window.matchMedia('(min-width: 992px)'),
    window.matchMedia('(min-width: 300px)'),
];

if (media2[0].matches) {
    make_slide2(4);
} else if (media2[1].matches) {
    make_slide2(3);
} else if (media2[2].matches) {
    make_slide2(2);
}else {
    make_slide2(1);
}
});

function make_slide2(amountSlideAppear2) {
// set width and margin for item slide
const widthItemAndMargin2 = 200;
let widthAllBox2 = widthItemAndMargin2 * listBox2.length;
wrapperBox2.style.width = `${widthAllBox2}px`;

listBox2.forEach((element) => {
    element.style.marginRight = '20px';
    element.style.width = `${widthItemAndMargin2 - 20}px`;
});

// handle slide
let count = 0;
let spacing = widthAllBox2 - amountSlideAppear2 * widthItemAndMargin2;
btnRight2.addEventListener('click', function () {
    count += widthItemAndMargin2;

    if (count > spacing) {
        count = 0;
    }
    wrapperBox2.style.transform = `translateX(${-count}px)`;
});

btnLeft2.addEventListener('click', function () {
    count -= widthItemAndMargin2;

    if (count < 0) {
        count = spacing;
    }
    wrapperBox2.style.transform = `translateX(${-count}px)`;
});
}
}
