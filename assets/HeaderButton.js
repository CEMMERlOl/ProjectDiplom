let bars1 = document.getElementById('bars1');
    function changeBars() {
        bars1.innerHTML = `<i class="fa-solid fa-bars-staggered"></i>`;
    }
    bars1.onblur = function() {
        bars1.innerHTML = `<i class="fa-solid fa-bars"></i>`;
    }