
    function openPopup() {
        document.getElementById('popup').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }

    // Mở pop-up khi người dùng bấm vào nút đăng ký
    document.querySelector('input[name="dangky"]').addEventListener('click', function(event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định
        openPopup();
    });

