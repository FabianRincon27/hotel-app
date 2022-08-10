var btn_add = document.getElementById("btn_add");

btn_add.addEventListener("click", function () {
    var name = document.getElementById("name");
    var address = document.getElementById("address");
    var city = document.getElementById("city");
    var number_of_rooms = document.getElementById("number_of_rooms");
    var errorName = document.getElementById("errorName");
    var errorAddress = document.getElementById("errorAddress");
    var errorCity = document.getElementById("errorCity");
    var errorRooms = document.getElementById("errorRooms");

    var form_add = document.getElementById("form_add");

    var cont = 0;

    if (name.value.length <= 0) {
        errorName.classList.remove("visually-hidden");
    } else {
        errorName.classList.add("visually-hidden");
        cont = cont + 1;
    }
    if (address.value.length <= 0) {
        errorAddress.classList.remove("visually-hidden");
    } else {
        errorAddress.classList.add("visually-hidden");
        cont = cont + 1;
    }
    if (city.value.length <= 0) {
        errorCity.classList.remove("visually-hidden");
    } else {
        errorCity.classList.add("visually-hidden");
        cont = cont + 1;
    }
    if (number_of_rooms.value.length <= 0) {
        errorRooms.classList.remove("visually-hidden");
    } else {
        errorRooms.classList.add("visually-hidden");
        cont = cont + 1;
    }

    if (cont == 4) {
        form_add.submit();
    }
});

function to_asign() {
    var num_rooms = document.getElementById("num_rooms");
    var errorCount = document.getElementById("errorCount");
    var form_rooms = document.getElementById("form_rooms");

    var amount_first = document.getElementById("amount_first");
    var amount_second = document.getElementById("amount_second");
    var amount_third = document.getElementById("amount_third");

    var cont =
        parseInt(amount_first.value) +
        parseInt(amount_second.value) +
        parseInt(amount_third.value);

    if (cont < parseInt(num_rooms.value) || cont > parseInt(num_rooms.value)) {
        errorCount.classList.remove("visually-hidden");
    } else {
        errorCount.classList.add("visually-hidden");
        form_rooms.submit();
    }
}
