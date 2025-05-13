    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>

<script>


    $(document).ready(function(){
        $('#inventoryCard').click(function() {
            window.location.href = 'inventory_view.php';
        });

        $('#userProfile').click(function() {
            alert("User Profile Clicked");
        });

        $('#supplierCard').click(function() {
            alert("Supplier Clicked");
        });

        $('#posCard').click(function() {
            alert("POS Clicked");
        });

        $('#reportsCard').click(function() {
            alert("Reports Clicked");
        });
    });

    function showToast(msg) {
        const toast = document.getElementById('toast');
        if (msg.trim() !== '') {
            toast.textContent = msg;
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 5000);
        }
    }

    $("#signupForm").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "save_user.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
                if (response.trim() === "success") {
                    showToast("User added successfully!");
                    setTimeout(function() {
                        window.location.href = "view_users.php";
                    }, 2000);
                } else {
                    showToast(response);
                }
            },
            error: function () {
                showToast('Something went wrong');
            }
        });
    });

    $("#updateForm").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "sql_updatedata.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
                if (response.trim() === "success") {
                    showToast("Updated successfully!");
                    setTimeout(function() {
                        window.location.href = "view_users.php";
                    }, 2000);
                } else {
                    showToast(response);
                }
            },
            error: function () {
                showToast('Something went wrong');
            }
        });
    });

    
    $("#addItemForm").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "inventory_insert.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
                if (response.trim() === "success") {
                    showToast("Item Added successfully!");
                    setTimeout(function() {
                        window.location.href = "inventory_view.php";
                    }, 2000);
                } else {
                    showToast(response);
                }
            },
            error: function () {
                showToast('Something went wrong');
            }
        });
    });

    $("#updateItem").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "inventory_update_sql.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
                if (response.trim() === "success") {
                    showToast("Item Edited successfully!");
                    setTimeout(function() {
                        window.location.href = "inventory_view.php";
                    }, 2000);
                } else {
                    showToast(response);
                }
            },
            error: function () {
                showToast('Something went wrong');
            }
        });
    });



    function confirmDeletion(user) {
        if (confirm('Are you sure you want to delete this user?')) {
            window.location.href = 'sql_delete_user.php?id=' + user;
        }
    }

    function confirmItemDeletion(item) {
        if (confirm('Are you sure you want to delete this item?')) {
            window.location.href = 'inventory_delete_sql.php?id=' + item;
        }
    }
       
    function getURLParam(name) {
    const url = new URL(window.location.href);
    return url.searchParams.get(name);
}

document.addEventListener("DOMContentLoaded", function () {
    const params = new URLSearchParams(window.location.search);
    const msg = params.get("msg");

    if (msg) {
        showToast(msg);
    }
});


       
</script>
</body>
</html>
