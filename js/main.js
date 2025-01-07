//= include plugins/*

$(document).ready(() => {
    //= include components/header.js
    //= include components/footer.js
});

//= include components/helpers.js

document.querySelector('.wpcf7-file').onchange = function() { 
    document.querySelector('.file-name').textContent = this.value.replace(/^.*[\\\/]/, '');
};