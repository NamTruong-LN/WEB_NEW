<form action="xulytimkiem.php" method="get" class="search-form">
    <input name="tukhoa" placeholder="Nhập từ khóa" class="search-input">
    <button type="submit" class="search-button">Tìm kiếm</button>
</form>
<style>
    .search-form {
        display: flex;
        align-items: center;
        border: 1px solid #87CEEB;
        padding: 5px;
        border-radius: 5px;
    }

    .search-input {
        flex-grow: 1;
        border: none;
        padding: 10px;
        border-radius: 3px;
        font-size: 14px;
        outline: none;
    }

    .search-input::placeholder {
        color: #b0b0b0;
    }

    .search-button {
        background-color: #20B2AA;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        font-size: 14px;
        cursor: pointer;
        margin-left: 10px;
    }

    .search-button:hover {
        background-color: #1A9080;
    }
</style>