export function ajaxOpenTabs() {
    const tabs = document.querySelectorAll(".destination-tabs li");
    const ajaxurl = ajax_object.ajaxurl;

    if (!tabs.length) {
        return;
    }

    tabs.forEach(function (tab) {
        tab.addEventListener("click", function () {
            tabs.forEach(function (t) {
                t.classList.remove("active");
            });

            tab.classList.add("active");

            const category = tab.getAttribute("data-category");
            loadPosts(category);
        });
    });

    loadPosts("");

    function loadPosts(category) {
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.querySelector(".destination-tabs .blog").innerHTML = xhr.responseText;
            }
        };

        xhr.open("POST", ajaxurl, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("action=get_destination_posts&category=" + category);
    }
}
