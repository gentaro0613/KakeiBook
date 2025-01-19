document.addEventListener("DOMContentLoaded", function () {
    const paginationLinks = document.querySelectorAll(".pagination a");

    paginationLinks.forEach((link) => {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            const targetUrl = link.getAttribute("href");

            // スクロール処理
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });

            // ページ移動
            setTimeout(() => {
                window.location.href = targetUrl;
            }, 500);
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const deleteButtons = document.querySelectorAll(".delete-button");

    deleteButtons.forEach((button) => {
        button.addEventListener("click", function (event) {
            const confirmDelete = confirm("本当に削除しますか？");
            if (!confirmDelete) {
                event.preventDefault(); // 削除をキャンセル
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const priceInput = document.getElementById("price");
    const totalDisplay = document.createElement("p");
    totalDisplay.style.fontWeight = "bold";
    totalDisplay.textContent = "現在の合計: 0円";
    priceInput.parentNode.appendChild(totalDisplay);

    priceInput.addEventListener("input", function () {
        const priceValue = parseFloat(priceInput.value) || 0;
        totalDisplay.textContent = `現在の合計: ${priceValue.toLocaleString()}円`;
    });
});
