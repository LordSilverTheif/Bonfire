const form = [...document.querySelector('.form').children];

form.forEach((item, i) => {
    setTimeout(() => {
        item.computedStyleMap.opacity =1;
    }, i*100);
})