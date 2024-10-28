


document.addEventListener("DOMContentLoaded", function () {
    var successAlert = document.getElementById("success-alert");

    if (successAlert) {
        console.log("Thông báo hiện, sẽ tự động tắt sau 10 giây.");

        // Tự động ẩn sau 10 giây
        setTimeout(function () {
            // Xóa class 'show' để bắt đầu ẩn dần
            successAlert.classList.remove("show");

            // Sau khi hoàn tất hiệu ứng, ẩn hoàn toàn
            setTimeout(function () {
                successAlert.style.display = "none";
            }, 500); // Khoảng thời gian ngắn để khớp với hiệu ứng CSS
        }, 5000); // Tự động ẩn sau 10 giây
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var errorPopup = document.getElementById("error-popup");
    if (errorPopup) {
        setTimeout(function () {
            errorPopup.style.display = "none";
        }, 10000); // 10 giây
    }
});



