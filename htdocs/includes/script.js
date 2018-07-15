var checkItems = [1234, 4321, 5678];
var myCheck = [
    [75, "Polo shirt"],
    [90, "Skinny Jeans"],
    [35, "Scarf"]
    ];
var items = [
    [1234, 75, "Polo shirt"],
    [4321, 90, "Skinny Jeans"],
    [5678, 35, "Scarf"]
];


function searchID() {
    "use strict";
    var i = 0;
    var resizeItem = document.getElementById('barc-input').value;
    var verifyItem = 0;
    for (i = 0; i < items.length; i++)
        if (resizeItem == items[i][0])
            verifyItem = 1;
    if (verifyItem)
        location.href = ('resize2.html');

    else alert("Incorrect barcode!");
}

var xsOn = 0,
    sOn = 0,
    mOn = 0,
    lOn = 0,
    xlOn = 0,
    xxlOn = 0,
    xxxlOn = 0;

function chooseXS() {
    "use strict";
    var p = $('#XS-icon')[0];
    p.style.border = 'dotted';
    if (xsOn === 0) {
        xsOn = 1;
        return;
    } else {
        xsOn = 0;
        p.style.border = 'none';
    }
}

function chooseS() {
    "use strict";
    var p = document.getElementById('S-icon');
    p.style.border = 'dotted';
    if (sOn === 0) {
        sOn = 1;
        return;
    } else {
        sOn = 0;
        p.style.border = 'none';
    }
}

function chooseM() {
    "use strict";
    var p = document.getElementById('M-icon');
    p.style.border = 'dotted';
    if (mOn === 0) {
        mOn = 1;
        return;
    } else {
        mOn = 0;
        p.style.border = 'none';
    }
}

function chooseL() {
    "use strict";
    var p = document.getElementById('L-icon');
    p.style.border = 'dotted';
    if (lOn === 0) {
        lOn = 1;
        return;
    } else {
        lOn = 0;
        p.style.border = 'none';
    }
}

function chooseXL() {
    "use strict";
    var p = document.getElementById('XL-icon');
    p.style.border = 'dotted';
    if (xlOn === 0) {
        xlOn = 1;
        return;
    } else {
        xlOn = 0;
        p.style.border = 'none';
    }
}

function chooseXXL() {
    "use strict";
    var p = document.getElementById('XXL-icon');
    p.style.border = 'dotted';
    if (xxlOn === 0) {
        xxlOn = 1;
        return;
    } else {
        xxlOn = 0;
        p.style.border = 'none';
    }
}

function chooseXXXL() {
    "use strict";
    var p = document.getElementById('XXXL-icon');
    p.style.border = 'dotted';
    if (xxxlOn === 0) {
        xxxlOn = 1;
        return;
    } else {
        xxxlOn = 0;
        p.style.border = 'none';
    }
}

function addToCart() {
    "use strict";
    var p = document.getElementById('buy-item-input').value;
    var verifyItem = 0;
    for (var i = 0; i < items.length; i++)
        if (p == items[i][0])
            verifyItem = 1;
    if (verifyItem) {
        checkItems.push(p);

        location.href = 'pay.html';
    } else alert("Incorrect barcode!");
}

function addAnotherItem() {
    "use strict";
    location.href = 'pay1.php';
}

function goToPayment() {
    "use strict";
    location.href = 'payment.php';
}

function getSize() {
    location.href = ("resize3.html");
}

function payWithCard() {
    location.href = ("swipe.html");
}

function payWithPoints() {
    location.href = ("#");
}

function completed() {
    location.href = ("paymentdone.html");
}

function startIt() {
    location.href = ("index.html");
}
