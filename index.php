
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>زمار أونلاين</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #1e1e2f;
            color: #ffffff;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .title {
            color: #ffffff;
            padding: 8px 0;
            width: 100%;
            text-align: center;
            font-size: 22px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            border-bottom: 4px solid #00d1b2;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: none; /* إزالة الخلفية */
        }

        .title:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        }

        .container {
            margin: 20px auto;
            max-width: 800px;
        }
        .group {
            margin: 20px 0;
        }
        .group-title {
            font-size: 18px;
            color: #00d1b2;
            margin-bottom: 10px;
        }
        video {
            width: 100%;
            max-width: 800px;
            border: 2px solid #00d1b2;
            border-radius: 10px;
            display: none;
            margin-top: 20px;
        }
        button {
            font-size: 14px;
            margin: 10px;
            padding: 8px 16px;
            background-color: #00d1b2;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #009f8c;
        }
        .advertisement {
            margin: 20px auto;
            max-width: 800px;
            padding: 15px;
            border: 2px dashed #00d1b2;
            border-radius: 10px;
            background-color: rgba(0, 209, 178, 0.1);
            color: #ffffff;
            font-size: 16px;
        }
        .advertisement h2 {
            color: #00d1b2;
            margin-bottom: 10px;
        }
        .advertisement p {
            margin: 10px 0;
            line-height: 1.5;
        }
        .news-section {
            margin: 30px auto;
            max-width: 800px;
            background-color: #2e2e42;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }
        .news-title {
            font-size: 20px;
            color: #00d1b2;
            margin-bottom: 15px;
        }
        .news-content {
            font-size: 16px;
            line-height: 1.6;
            color: #ffffff;
        }
        .popup {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 600px;
            background-color: #2e2e42;
            border: 2px solid #00d1b2;
            border-radius: 10px;
            padding: 15px 20px;
            color: #ffffff;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            display: none;
            animation: slideDown 0.5s ease-out;
        }
        .popup.active {
            display: block;
        }
        .popup h3 {
            color: #00d1b2;
            margin: 0;
            font-size: 20px;
        }
        .popup p {
            font-size: 16px;
            margin: 10px 0;
        }
        .popup button {
            background-color: #00d1b2;
            color: #ffffff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }
        .popup button:hover {
            background-color: #009f8c;
        }
        @keyframes slideDown {
            from {
                transform: translateX(-50%) translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(-50%) translateY(0);
                opacity: 1;
            }
        }
        .new-year-greeting {
            margin: 20px auto;
            padding: 20px;
            background: linear-gradient(45deg, #ff7e5f, #feb47b);
            border-radius: 10px;
            max-width: 800px;
            color: #ffffff;
            font-size: 18px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            animation: fadeIn 2s ease-out;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .new-year-greeting i {
            font-size: 32px;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
.news-ticker {
    width: 100%;
    background-color: #00d1b2;
    color: #ffffff;
    padding: 10px 0;
    overflow: hidden;
    position: relative;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    font-size: 16px;
    white-space: nowrap;
    direction: ltr; /* لضمان الاتجاه من اليسار لليمين */
}
.news-ticker-content {
    display: inline-block;
    padding-right: 100%; /* نقل النص إلى خارج الشاشة على اليمين */
    animation: ticker-left-to-right 45s linear infinite;
}
@keyframes ticker-left-to-right {
    from {
        transform: translateX(-100%);
    }
    to {
        transform: translateX(100%);
    }
}
 .test-version {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 8px; /* حجم الخط صغير */
    color: #ffffff; /* لون الخط أبيض */
    font-family: 'Cairo', sans-serif; /* نفس نوع الخط المستخدم في باقي الصفحة */
    background-color: rgba(0, 0, 0, 0.6); /* خلفية مظللة قليلاً */
    padding: 5px 10px; /* مساحة داخلية */
    border-radius: 5px; /* زوايا مستديرة */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* تأثير الظل */
    font-weight: bold; /* جعل النص عريضًا */
}

.new-updates {
    margin: 20px auto;
    padding: 20px;
    background: linear-gradient(45deg, #ff6f61, #ffb347, #f7c9b0); /* خلفية بتدرج ألوان زاهية */
    border-radius: 10px;
    max-width: 800px;
    color: #ffffff;
    font-size: 18px;
    text-shadow: 2px 2px 12px rgba(0, 0, 0, 0.4);
    font-weight: bold;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4); /* تحسين الظل */
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    flex-direction: row;
}

.new-updates i {
    font-size: 40px; /* زيادة حجم الأيقونة */
    color: #fff; /* تغيير لون الأيقونة إلى أبيض ليتماشى مع الخلفية */
}

.new-updates p {
    font-size: 16px;
    line-height: 1.6;
    color: #ffffff;
    text-align: center; /* ضبط النص في المنتصف */
    margin: 0;
}

.new-updates:hover {
    transform: scale(1.05); /* تأثير تكبير عند المرور */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5); /* تأثير الظل عند المرور */
}
   
   /* بداية تنسيق زر الثلاث نقاط */
.menu-container {
    position: absolute;
    top: 10px;
    left: 10px;
}

.menu-icon {
    font-size: 24px;
    color: #ffffff;
    cursor: pointer;
    background: rgba(0, 0, 0, 0.5);
    padding: 8px;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    transition: background-color 0.3s;
}

.menu-icon:hover {
    background-color: rgba(0, 0, 0, 0.7);
}
/* نهاية تنسيق زر الثلاث نقاط */

/* بداية تنسيق القائمة المنبثقة */
.menu-popup {
    display: none;
    position: absolute;
    top: 40px; /* لجعل القائمة تظهر تحت الزر */
    left: 10px;
    background-color: #2e2e42;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    width: 200px;
    text-align: left;
    z-index: 1000;
}

.menu-popup ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.menu-popup li {
    padding: 12px 16px;
    color: #ffffff;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: background-color 0.3s ease;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.menu-popup li:last-child {
    border-bottom: none;
}

.menu-popup li:hover {
    background-color: #00d1b2;
    color: #000;
}

.menu-popup i {
    font-size: 18px;
    color: #00d1b2;
}
/* نهاية تنسيق القائمة المنبثقة */
  
  /* استيراد خط كايرو */
@import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');

/* تنسيق قسم أندية زمار الرياضية */
.club-section {
    text-align: center;
    margin-top: 50px;
    padding: 20px;
    background-color: #f5f5f5; /* خلفية هادئة */
    border-radius: 15px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    font-family: 'Cairo', sans-serif; /* استخدام خط كايرو */
}

/* تنسيق عنوان القسم */
.club-section h1 {
    font-size: 24px; /* حجم الخط صغير */
    color: #333;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* تنسيق سلايدر الأندية */
.club-slider {
    display: flex;
    overflow-x: auto; /* تفعيل التمرير الأفقي */
    gap: 15px;
    scroll-snap-type: x mandatory; /* تمكين السحب السلس للصور */
    -webkit-overflow-scrolling: touch; /* تحسين التمرير على الأجهزة المحمولة */
    padding-bottom: 20px; /* إضافة هامش أسفل السلايدر */
}

.club-slider::-webkit-scrollbar {
    display: none; /* إخفاء شريط التمرير */
}

.club-slider .club-card {
    flex-shrink: 0;
    width: 250px; /* عرض البطاقة */
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    scroll-snap-align: center; /* لضمان محاذاة الصور في السلايدر */
    transition: transform 0.3s ease-in-out;
}

/* تأثير التكبير عند المرور على صورة النادي */
.club-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* تنسيق الصورة داخل كل بطاقة */
.club-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 10px 10px 0 0; /* تعديل الزوايا العلوية فقط */
}

/* تنسيق اسم النادي أسفل الصورة */
.club-name {
    font-size: 14px;
    color: #444;
    font-weight: bold;
    margin-top: 10px;
    text-align: center;
    padding-bottom: 15px;
}
  
  .channels-section {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin-top: 30px;
}

.channel-button {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: #2e2e42;
    border: 2px solid #00d1b2;
    border-radius: 10px;
    width: 100px;
    padding: 10px;
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s;
}

.channel-button:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

.channel-button img {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
}

.channel-button span {
    color: #ffffff;
    font-size: 14px;
    font-weight: bold;
}

.bein-options {
    display: none;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    margin-top: 10px;
}

.bein-options button {
    background-color: #00d1b2;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.bein-options button:hover {
    background-color: #009f8c;
}
   
  
  /* تصميم عام للقسم */
.clubs-section {
    position: relative;
    width: 90%; /* تقليل العرض ليتناسب مع الشاشة */
    max-width: 600px;
    margin: 20px auto;
    padding: 15px;
    background: linear-gradient(135deg, #ffefba, #ffffff);
    border-radius: 15px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

/* العنوان */
.clubs-title {
    text-align: center;
    font-size: 22px;
    color: #333;
    margin-bottom: 15px;
}

/* سلايدر الأندية */
.clubs-slider {
    display: flex;
    gap: 15px;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    padding-bottom: 10px;
}

.club-item {
    flex-shrink: 0;
    width: 120px;
    text-align: center;
    position: relative;
    scroll-snap-align: center;
}

.club-image {
    width: 100%;
    border-radius: 10px;
    cursor: pointer;
    transition: transform 0.3s;
}

.club-image:hover {
    transform: scale(1.05);
}

.club-name {
    font-size: 14px;
    color: #333;
    margin-top: 8px;
}

/* نافذة منبثقة */
.modal {
    display: none; /* النافذة مخفية افتراضيًا */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    padding-top: 60px;
}

.modal-content {
    margin: auto;
    display: block;
    max-width: 80%;
    max-height: 80%;
}

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}

/* تحسين استجابة التصميم */
@media (max-width: 480px) {
    .club-item {
        width: 100px;
    }
    .clubs-title {
        font-size: 18px;
    }
    .club-name {
        font-size: 12px;
    }
}
   
   .urgent-news {
    margin: 20px auto;
    max-width: 800px;
    background-color: #ff3b30; /* لون خلفية لافت */
    color: #ffffff;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    font-size: 18px;
    font-weight: bold;
    animation: slideIn 1s ease-out;
}

.urgent-news-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.urgent-icon {
    font-size: 24px;
    color: #ffffff;
}

.urgent-message {
    font-size: 16px;
    line-height: 1.5;
    margin: 0;
}

/* حركة التنقل */
@keyframes slideIn {
    from {
        transform: translateX(-100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}
    </style>
</head>
<body>



<!-- الشريط العلوي -->
<div class="header">
    <div class="header-left">
        <!-- زر تايم لاين مع أيقونة متحركة -->
        <a href="posts.php" class="timeline-button">
            <i class="fas fa-comment-dots" id="timeline-icon"></i>
            <span id="timeline-text">تايم لاين</span>
        </a>
    </div>
    <div class="header-center">
        <h1 class="header-title">منصّة زمار</h1>
    </div>
    <div class="header-right">
        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="menu" id="menu">
            <a href="#" class="menu-item">
                <i class="fas fa-home"></i>
                <span>الرئيسية</span>
            </a>
            <a href="national_id_updates.php" class="menu-item">
                <i class="fas fa-id-card"></i>
                <span>جدول الموحدة</span>
            </a>
            <a href="show_healthcare.html" class="menu-item">
                <i class="fas fa-user-md"></i>
                <span>اعرف طبيبك</span>
            </a>
            <a href="show_craftsmen.html" class="menu-item">
                <i class="fas fa-hammer"></i>
                <span>اطلب حرفي</span>
            </a>
            <a href="soq.html" class="menu-item">
                <i class="fas fa-store"></i>
                <span>سوق زمار المفتوح</span>
            </a>
            <a href="show_taxis.html" class="menu-item">
                <i class="fas fa-taxi"></i>
                <span>طلب سيارة اجرة</span>
            </a>
            <a href="posts.php" class="menu-item">
                <i class="fas fa-utensils"></i>
                <span>المطاعم</span>
            </a>
			            <a href="pharm/index.php" class="menu-item">
                <i class="fas fa-capsules"></i>
                <span>الصيدليات الخافرة</span>
            </a>
            <a href="us.php" class="menu-item">
                <i class="fas fa-envelope"></i>
                <span>تواصل معنا</span>
            </a>
        </div>
    </div>
</div>

<style>
    /* الشريط العلوي */
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 70px;
        background: linear-gradient(135deg, #6a5acd, #836fff, #9370db);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        font-family: 'Cairo', sans-serif;
        z-index: 1000;
    }

    .header-left .timeline-button {
        font-size: 14px;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        background-color: #9370db;
        padding: 8px 15px;
        border-radius: 25px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        position: relative;
        overflow: hidden;
        transition: background-color 0.3s ease;
        min-width: 110px;
    }

    .header-left .timeline-button:hover {
        background-color: #7a4ea3;
    }

    .header-left .timeline-button i {
        font-size: 18px;
        position: relative;
        transition: transform 0.4s ease-in-out;
        margin-right: 10px;
    }

    #timeline-text {
        transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
        display: inline-block;
        min-width: 70px;
        text-align: center;
    }

    /* تعديل لون النص "منصّة زمار" إلى الأبيض */
    .header-title {
        font-size: 30px;
        font-weight: bold;
        color: #ffffff;  /* تغيير اللون إلى الأبيض */
        transition: all 0.5s ease-in-out;
    }

    .header-title:hover {
        color: #d3a7f4;  /* إضافة تأثير تدرج لوني خفيف عند التمرير */
    }

    /* زر الثلاث نقاط */
    .menu-toggle {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 30px;
        height: 20px;
        cursor: pointer;
        margin-right: 30px;
    }

    .menu-toggle span {
        display: block;
        width: 100%;
        height: 4px;
        background: #ffffff;
        border-radius: 2px;
        transition: background 0.3s ease;
    }

    .menu-toggle:hover span {
        background: #ffd700;
    }

    /* القائمة المنسدلة */
    .menu {
        position: absolute;
        top: calc(70px + 5px);
        right: 38px;
        background: #ffffff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        overflow: hidden;
        display: none;
        z-index: 1001;
        width: 200px;
    }

    .menu-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 15px;
        font-size: 16px;
        color: #333333;
        text-decoration: none;
        transition: background 0.3s ease;
    }

    .menu-item:hover {
        background: #f0f0f0;
    }

    .menu-item i {
        font-size: 18px;
        color: #6a5acd;
    }
</style>

<script>
    // التحكم في القائمة المنسدلة
    function toggleMenu() {
        const menu = document.getElementById("menu");
        if (menu.style.display === "block") {
            menu.style.display = "none";
        } else {
            menu.style.display = "block";
        }
    }

    // إخفاء القائمة عند النقر خارجها
    document.addEventListener("click", function (e) {
        const menu = document.getElementById("menu");
        const toggle = document.querySelector(".menu-toggle");
        if (!menu.contains(e.target) && !toggle.contains(e.target)) {
            menu.style.display = "none";
        }
    });

    // تغيير النص مع تأثير التحرك فقط للنص
    const texts = ["تايم لاين", "المطاعم"];
    let index = 0;

    function animateTimelineButton() {
        const icon = document.getElementById("timeline-icon");
        const text = document.getElementById("timeline-text");

        // إخفاء النص فقط
        text.style.opacity = "0"; // إخفاء النص
        text.style.transform = "translateX(-10px)"; // تحريك النص لليسار

        setTimeout(() => {
            // تبديل النص
            index = (index + 1) % texts.length;
            text.innerText = texts[index];

            // إظهار النص وتحريكه إلى مكانه
            text.style.opacity = "1";
            text.style.transform = "translateX(0)"; // عودة النص لمكانه
        }, 400); // تأخير 400 مللي ثانية لإخفاء النص فقط

    }

    setInterval(animateTimelineButton, 1400);
</script>













<h1 class="title"> </h1>
<h1 class="title"> </h1>



<!-- شريط إخباري -->
<div class="custom-news-bar">
    <div class="custom-news-wrapper">
        <span class="custom-news-item">الصيدليات الخافرة: اكتشف بسهولة الصيدليات التي تعمل خلال الليل، لتتمكن من الحصول على الأدوية عند الحاجة
</span>
        <span class="custom-news-item">قسم الأطباء: ابحث عن أفضل الأطباء والصيادلة والمختبرات، مع تقييمات حقيقية من الجمهور وتوثيق رسمي من المنصة لضمان جودتهم</span>
        <span class="custom-news-item">خدمة الحرفيين: احصل على خدمات الحرفيين المتميزين بسهولة، مع تقييمات حقيقية من العملاء السابقين، وإمكانية توثيقهم عبر المنصة</span>
        <span class="custom-news-item">طلب سيارة أجرة: اطلب سيارة أجرة بكبسة زر، وتواصل بسهولة مع السائقين، مع إمكانية تقييم الخدمة بعد التجربة. كما يمكن العثور على سائقين موثقين بعلامة الزرقاء</span>
         <span class="custom-news-item">سوق زمار الإلكتروني: بيع وشراء المنتجات المتنوعة بسهولة تامة، مع عرض وشراء المنتجات من أي تصنيف ترغب فيه</span>
          <span class="custom-news-item">تايم لاين للمطاعم: استمتع بأحدث العروض المميزة من المطاعم الموثقة، لتكون على اطلاع دائم بما يقدمه كل منها</span>
		            <span class="custom-news-item">جدول البطاقة الموحدة: احصل على تفاصيل محدثة أسبوعيًا حول جداول حجز البطاقة الموحدة، لتخطيط أمورك بكل سهولة</span>
    </div>
</div>

<style>
    /* الشريط الإخباري */
    .custom-news-bar {
        position: fixed; /* يظهر دائمًا في أسفل الصفحة */
        bottom: 0;
        left: 0;
        width: 100%;
        height: 60px;
        background: linear-gradient(90deg, #6a5acd, #836fff, #9370db); /* ألوان بنفسجية هادئة */
        color: #ffffff;
        font-family: 'Cairo', sans-serif;
        overflow: hidden;
        display: flex;
        align-items: center;
        box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.3);
        z-index: 999; /* يظهر فوق باقي العناصر */
    }

    /* الحاوية الداخلية */
    .custom-news-wrapper {
        display: flex;
 animation: slideNews 90s linear infinite; /* حركة الأخبار */
        gap: 50px; /* مسافة بين الأخبار */
        white-space: nowrap; /* منع النصوص من الالتفاف */
        direction: ltr; /* اتجاه النص من اليسار لليمين */
    }

    .custom-news-item {
        font-size: 16px;
        font-weight: bold;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2); /* تأثير ظل للنص */
    }

    /* حركة الشريط */
    @keyframes slideNews {
        0% {
            transform: translateX(-100%);
        }
        100% {
            transform: translateX(100%);
        }
    }
</style>

<!-- قسم الصيدليات -->
<div class="pharmacy-box">
  <a href="pharm/index.php" class="pharmacy-link">
    <i class="fas fa-moon"></i> <!-- استخدام هلال بدلاً من الأيقونة -->
    <span>الصيدليات الخافرة</span>
  </a>
</div>

<!-- تضمين مكتبة FontAwesome للأيقونات -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<!-- تضمين مكتبة GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<style>
  /* صندوق الصيدليات */
  .pharmacy-box {
    background: linear-gradient(145deg, #66cc99, #33cc33); /* تدرج ألوان الصيدليات */
    padding: 20px 0;
    text-align: center;
    width: 100vw; /* عرض الشاشة بالكامل */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 0; /* إزالة الحواف */
    transition: filter 0.3s ease;
    box-sizing: border-box; /* ضمان أن padding لا يؤثر على العرض الكلي */
  }

  /* رابط الصيدليات */
  .pharmacy-link {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-decoration: none;
    color: #ffffff; /* لون النص الأبيض لتحسين التباين */
    font-size: 1.4rem;
    font-weight: bold;
  }

  /* أيقونة الهلال */
  .pharmacy-link i {
    font-size: 2.5rem; /* حجم مناسب للهلال */
  }

  /* تأثير عند التمرير */
  .pharmacy-box:hover {
    filter: brightness(1.1);
  }

  /* تأثير حركة الهلال */
  @keyframes moonAnimation {
    0% {
      transform: translateY(0) scale(1);
      opacity: 1;
    }
    50% {
      transform: translateY(-10px) scale(1.2);
      opacity: 0;
    }
    100% {
      transform: translateY(0) scale(1);
      opacity: 1;
    }
  }

  .pharmacy-link i {
    animation: moonAnimation 2s infinite ease-in-out; /* تطبيق تأثير الحركة على الهلال */
  }

  /* تصميم متجاوب */
  @media (max-width: 600px) {
    .pharmacy-link {
      font-size: 1.1rem;
    }

    .pharmacy-link i {
      font-size: 1.8rem; /* تصغير الأيقونة للهاتف */
    }
  }
</style>

<script>
  // استخدام GSAP لتأثير التواء الأيقونة حول نفسها عند تحميل الصفحة
  gsap.from(".pharmacy-link i", {
    opacity: 0,
    rotationY: 180,  // بدء التأثير من 180 درجة حول المحور Y
    duration: 1,     // مدة التأثير
    delay: 0.5,      // تأخير قليلاً قبل أن يبدأ التأثير
    ease: "power4.out",  // سلاسة الحركة في النهاية
  });
</script>




<!-- قسم البطاقة الوطنية الموحدة -->
<div class="national-id-box">
  <a href="national_id_updates.php" class="national-id-link">
    <i class="fas fa-id-card"></i>
    <span>جدول البطاقة الوطنية الموحدة</span>
  </a>
</div>

<!-- تضمين مكتبة FontAwesome للأيقونات -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<!-- تضمين مكتبة GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<style>
  /* صندوق البطاقة الوطنية */
  .national-id-box {
    background: linear-gradient(145deg, #8ec5fc, #e0c3fc); /* تدرج ألوان الحرفيين */
    padding: 20px 0;
    text-align: center;
    width: 100%; /* عرض الشاشة بالكامل */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  /* رابط البطاقة الوطنية */
  .national-id-link {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-decoration: none;
    color: #333; /* لون النص الداكن لتحسين التباين */
    font-size: 1.4rem;
    font-weight: bold;
  }

  /* أيقونة البطاقة الوطنية */
  .national-id-link i {
    font-size: 2rem; /* حجم مناسب للأيقونة */
  }

  /* تأثير عند التمرير */
  .national-id-box:hover {
    filter: brightness(1.1);
    transition: 0.3s;
  }

  /* تصميم متجاوب */
  @media (max-width: 600px) {
    .national-id-link {
      font-size: 1.1rem;
    }

    .national-id-link i {
      font-size: 1.5rem; /* تصغير الأيقونة للهواتف */
    }
  }
</style>

<script>
  // استخدام GSAP لتأثير التواء الأيقونة حول نفسها عند تحميل الصفحة
  gsap.from(".national-id-link i", {
    opacity: 0,
    rotationY: 180,  // بدء التأثير من 180 درجة حول المحور Y
    duration: 1,     // مدة التأثير
    delay: 0.5,      // تأخير قليلاً قبل أن يبدأ التأثير
    ease: "power4.out",  // سلاسة الحركة في النهاية
  });
</script>








<!-- قسم سيارات الأجرة في ناحية زمار -->
<section id="zummar-taxi" class="zummar-taxi">
  <header data-aos="fade-up">
    <h2>اطلب سيارة اجرة</h2>
    <p>استمتع برحلة آمنة وسريعة مع سائقين موثوقين وخدمات متميزة.</p>
  </header>

  <!-- مخطط زمني للمزايا -->
  <div class="features-timeline">
    <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
      <div class="feature-content">
        <h3>سائقون موثقون</h3>
        <p>أغلب السائقين لدينا لديهم حسابات موثقة لضمان الأمان والثقة.</p>
        <span class="feature-icon"><i class="fas fa-id-card"></i></span>
      </div>
    </div>

    <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
      <div class="feature-content">
        <h3>نظام تقييم متكامل</h3>
        <p>يمكنك تقييم السائقين بعد كل رحلة لضمان أفضل تجربة للمستخدمين.</p>
        <span class="feature-icon"><i class="fas fa-star"></i></span>
      </div>
    </div>

    <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
      <div class="feature-content">
        <h3>وصول سريع</h3>
        <p>اعثر على أقرب سيارة أجرة إليك في دقائق من خلال التواصل المباشر مع السائق.</p>
        <span class="feature-icon"><i class="fas fa-taxi"></i></span>
      </div>
    </div>
  </div>

  <a href="show_taxis.html" id="explore-btn" class="explore-btn" data-aos="zoom-in" data-aos-delay="400">اطلب سيارة اجرة</a>
</section>

<!-- تضمين الخطوط والأيقونات -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- تضمين التنسيقات -->
<style>
  body {
    font-family: 'Cairo', sans-serif;
    background: #f8f8ff;
    color: #333;
    margin: 0;
  }

  /* تنسيق قسم سيارات الأجرة */
  #zummar-taxi {
    background: linear-gradient(145deg, #7b68ee, #b39ddb); /* تدرج بنفسي هادئ */
    color: #fff;
    text-align: center;
    padding: 3rem 1.5rem;
    position: relative;
  }

  #zummar-taxi header h2 {
    font-size: 2.2rem;
    margin: 0;
  }

  #zummar-taxi header p {
    font-size: 1.1rem;
    margin: 8px 0 15px;
  }

  .features-timeline {
    position: relative;
    padding-left: 2rem;
    padding-right: 2rem;
    margin-top: 20px;
  }

  .feature-item {
    display: flex;
    margin-bottom: 20px;
    position: relative;
  }

  .feature-item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    width: 10px;
    height: 10px;
    background: #fff;
    border-radius: 50%;
    border: 3px solid #7b68ee;
    transform: translateY(-50%);
  }

  .feature-content {
    background: #fff;
    color: #333;
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    flex: 1;
    margin-left: 30px;
  }

  .feature-content h3 {
    font-size: 1.3rem;
    margin: 0;
    color: #7b68ee; /* لون العناوين */
  }

  .feature-content p {
    font-size: 1rem;
    margin: 8px 0;
    color: #7b68ee; /* نفس لون العناوين */
  }

  .feature-icon {
    font-size: 2rem;
    color: #7b68ee;
    text-align: center;
    margin-top: 10px;
  }

  /* تنسيق زر اكتشاف المزيد */
  #explore-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background: #6a5acd; /* لون زر مطابق */
    color: #fff;
    border-radius: 30px;
    text-decoration: none;
    transition: 0.3s;
  }

  #explore-btn:hover {
    background: #483d8b;
    color: #fff;
  }

  @media (max-width: 768px) {
    .feature-item {
      flex-direction: column;
      text-align: center;
    }

    .feature-icon {
      margin-top: 10px;
    }

    #explore-btn {
      font-size: 1rem;
      padding: 0.6rem 1.5rem;
    }
  }
</style>

<!-- تفعيل التأثيرات -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
  });
</script>



<!-- إضافة قسم التقييم -->
<div class="rating-section" style="margin-top: 20px;">
    <h2>قيّم منصّة زمار</h2>
    <div class="rating-stars" id="ratingStars">
        <i class="fa fa-star" data-value="1"></i>
        <i class="fa fa-star" data-value="2"></i>
        <i class="fa fa-star" data-value="3"></i>
        <i class="fa fa-star" data-value="4"></i>
        <i class="fa fa-star" data-value="5"></i>
    </div>
    <button onclick="submitRating()" style="margin-top: 10px; background-color: #00d1b2; color: white; border: none; padding: 10px 20px; border-radius: 5px;">إرسال التقييم</button>
</div>

<!-- عرض نسبة التقييم -->
<div id="averageRating" style="margin-top: 20px; color: #ffc107; font-weight: bold;"></div>

<!-- تضمين SweetAlert2 لإظهار الرسائل المنبثقة -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // وظيفة لتوليد UUID فريد
    function generateUUID() {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            const r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
    }

    // التحقق إذا كان UUID موجودًا، إذا لم يكن موجودًا يتم إنشاؤه
    let deviceId = localStorage.getItem('device_uuid');
    if (!deviceId) {
        deviceId = generateUUID();
        localStorage.setItem('device_uuid', deviceId); // حفظ UUID في localStorage
    }

    let selectedRating = 0;

    // التعامل مع النقر على النجوم
    document.querySelectorAll('#ratingStars i').forEach(star => {
        star.addEventListener('click', () => {
            selectedRating = star.getAttribute('data-value');
            updateStars(selectedRating);
        });
    });

    // تحديث ألوان النجوم
    function updateStars(rating) {
        document.querySelectorAll('#ratingStars i').forEach(star => {
            star.style.color = star.getAttribute('data-value') <= rating ? '#ffc107' : '#ddd';
        });
    }

    // إرسال التقييم إلى الخادم
    function submitRating() {
        if (selectedRating === 0) {
            Swal.fire('خطأ', 'يرجى اختيار تقييم!', 'error');
            return;
        }

        // إرسال التقييم باستخدام Ajax
        const formData = new FormData();
        formData.append('rating', selectedRating);
        formData.append('device_id', deviceId); // إرسال UUID مع التقييم

        fetch('rate_content_handler.php', {  // الاسم الجديد للملف
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Swal.fire('شكراً', data.message, 'success');
                calculateRating();  // تحديث متوسط التقييم بعد الإرسال
            } else {
                Swal.fire('عذراً', data.message, 'warning');
            }
        })
        .catch(error => {
            Swal.fire('خطأ', 'حدث خطأ أثناء إرسال التقييم', 'error');
        });
    }

    // حساب متوسط التقييم
    function calculateRating() {
        fetch('fetch_ratings_summary.php') // الاسم الجديد للملف
        .then(response => response.json())
        .then(data => {
            document.getElementById('averageRating').innerText = `متوسط التقييم: ${data.average} من 5 (${data.count} تقييم)`;
        });
    }

    // عرض متوسط التقييم عند التحميل
    document.addEventListener('DOMContentLoaded', calculateRating);

</script>



<!-- بداية قسم سوق زمار الالكتروني -->
<div id="unique-zummar-market-section-2025" class="zummar-market-section">
  <header>
    <h1 id="unique-zummar-header-title-2025">سوق زمار الالكتروني</h1>
    <p id="unique-zummar-header-description-2025">اكتشف تجربة تسوق مميزة مع منتجات متنوعة وأسعار تنافسية!</p>
  </header>

  <!-- التايم لاين الخاص بالسوق -->
  <div id="unique-zummar-timeline-container-2025" class="zummar-timeline-container">
    <!-- نقطة البداية -->
    <div id="unique-zummar-timeline-point-1-2025" class="zummar-timeline-point">
      <div id="unique-zummar-timeline-content-1-2025" class="zummar-timeline-content">
        <h3 id="unique-zummar-timeline-heading-1-2025">كل شيء متوفر</h3>
        <p id="unique-zummar-timeline-description-1-2025" class="zummar-timeline-description">يتيح السوق مجموعة متنوعة من المنتجات التي تلبي جميع احتياجاتك بسهولة.</p>
        <div id="unique-zummar-timeline-icon-1-2025" class="zummar-timeline-icon">
          <i class="fas fa-box"></i> <!-- أيقونة توفر المنتجات -->
        </div>
      </div>
    </div>

    <!-- نقطة أخرى في التايم لاين -->
    <div id="unique-zummar-timeline-point-2-2025" class="zummar-timeline-point">
      <div id="unique-zummar-timeline-content-2-2025" class="zummar-timeline-content">
        <h3 id="unique-zummar-timeline-heading-2-2025">نشر المنتجات بسهولة</h3>
        <p id="unique-zummar-timeline-description-2-2025" class="zummar-timeline-description">يمكن لأي شخص نشر منتجاته وخدماته بسهولة في السوق لعرضها على المشترين.</p>
        <div id="unique-zummar-timeline-icon-2-2025" class="zummar-timeline-icon">
          <i class="fas fa-upload"></i> <!-- أيقونة نشر المنتجات -->
        </div>
      </div>
    </div>

    <!-- نقطة أخرى في التايم لاين -->
    <div id="unique-zummar-timeline-point-3-2025" class="zummar-timeline-point">
      <div id="unique-zummar-timeline-content-3-2025" class="zummar-timeline-content">
        <h3 id="unique-zummar-timeline-heading-3-2025">سهولة التواصل مع البائع</h3>
        <p id="unique-zummar-timeline-description-3-2025" class="zummar-timeline-description">يتيح السوق خيارات تواصل مباشرة وسهلة بين البائعين والمشترين لضمان تجربة مريحة.</p>
        <div id="unique-zummar-timeline-icon-3-2025" class="zummar-timeline-icon">
          <i class="fas fa-comments"></i> <!-- أيقونة التواصل -->
        </div>
      </div>
    </div>
  </div>

  <!-- زر للمزيد من المعلومات -->
  <a id="unique-zummar-more-info-btn-2025" href="soq.html" class="zummar-more-info-btn">استكشف المزيد عن السوق</a>
</div>
<!-- نهاية قسم السوق -->

<!-- تضمين الخطوط والمكتبة -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<style>
  /* إعداد الخلفية */
  body {
    margin: 0;
    font-family: 'Cairo', sans-serif;
    background: #f8f8ff;
    color: #333;
  }

  /* قسم السوق */
  #unique-zummar-market-section-2025 {
    background: linear-gradient(145deg, #7b68ee, #d8bfd8); /* تدرج بنفسجي هادئ */
    color: #fff;
    padding: 3rem 1.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 40px auto;
  }

  #unique-zummar-header-title-2025 {
    font-size: 2.2rem;
    margin: 0;
  }

  #unique-zummar-header-description-2025 {
    font-size: 1.1rem;
    margin: 8px 0 15px;
  }

  /* التايم لاين */
  #unique-zummar-timeline-container-2025 {
    position: relative;
    padding-left: 2rem;
    padding-right: 2rem;
    margin-top: 20px;
  }

  #unique-zummar-timeline-point-1-2025,
  #unique-zummar-timeline-point-2-2025,
  #unique-zummar-timeline-point-3-2025 {
    display: flex;
    margin-bottom: 20px;
    position: relative;
  }

  #unique-zummar-timeline-point-1-2025::before,
  #unique-zummar-timeline-point-2-2025::before,
  #unique-zummar-timeline-point-3-2025::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    width: 10px;
    height: 10px;
    background: #fff;
    border-radius: 50%;
    border: 3px solid #7b68ee;
    transform: translateY(-50%);
  }

  #unique-zummar-timeline-content-1-2025,
  #unique-zummar-timeline-content-2-2025,
  #unique-zummar-timeline-content-3-2025 {
    background: #fff;
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    flex: 1;
    margin-left: 30px;
  }

  #unique-zummar-timeline-heading-1-2025,
  #unique-zummar-timeline-heading-2-2025,
  #unique-zummar-timeline-heading-3-2025 {
    font-size: 1.3rem;
    margin: 0;
    color: #7b68ee; /* لون عناوين */
  }

  #unique-zummar-timeline-description-1-2025,
  #unique-zummar-timeline-description-2-2025,
  #unique-zummar-timeline-description-3-2025 {
    font-size: 1rem;
    margin: 8px 0;
    color: #7b68ee; /* نفس لون العناوين */
  }

  /* أيقونات التايم لاين */
  #unique-zummar-timeline-icon-1-2025,
  #unique-zummar-timeline-icon-2-2025,
  #unique-zummar-timeline-icon-3-2025 {
    margin-top: 10px;
    font-size: 2rem;
    color: #7b68ee;
    text-align: center;
  }

  #unique-zummar-more-info-btn-2025 {
    display: inline-block;
    background: #6a5acd;
    color: #fff;
    padding: 0.8rem 2rem;
    font-size: 1.1rem;
    border-radius: 30px;
    text-decoration: none;
    transition: 0.3s;
    margin-top: 20px;
  }

  #unique-zummar-more-info-btn-2025:hover {
    background: #483d8b;
    color: #fff;
  }

  /* تصميم متجاوب */
  @media (max-width: 768px) {
    #unique-zummar-market-section-2025 {
      padding: 2rem 1.5rem;
    }

    #unique-zummar-header-title-2025 {
      font-size: 1.8rem;
    }

    #unique-zummar-header-description-2025 {
      font-size: 1rem;
    }

    #unique-zummar-timeline-point-1-2025,
    #unique-zummar-timeline-point-2-2025,
    #unique-zummar-timeline-point-3-2025 {
      flex-direction: column;
      align-items: flex-start;
    }

    #unique-zummar-timeline-content-1-2025,
    #unique-zummar-timeline-content-2-2025,
    #unique-zummar-timeline-content-3-2025 {
      margin-left: 0;
    }

    #unique-zummar-more-info-btn-2025 {
      font-size: 1rem;
      padding: 0.6rem 1.5rem;
    }
  }
</style>








<!-- بداية قسم أفضل المطاعم في زمار -->
<div id="zummar-market-section" class="zummar-market-section">
  <header>
    <h1 id="zummar-header-title">أفضل المطاعم في زمار</h1>
    <p id="zummar-header-description">اكتشف تجربة طعام مميزة مع خدمات استثنائية وأجواء لا تُنسى!</p>
  </header>

  <!-- التايم لاين الخاص بالمطاعم -->
  <div id="zummar-timeline-container" class="zummar-timeline-container">
    <!-- نقطة البداية -->
    <div id="zummar-timeline-point-1" class="zummar-timeline-point" data-aos="fade-up" data-aos-delay="100">
      <div id="zummar-timeline-content-1" class="zummar-timeline-content">
        <h3 id="zummar-timeline-heading-1">خدمة توصيل سريعة</h3>
        <p id="zummar-timeline-description-1" class="zummar-timeline-description">تمتع بأسرع خدمة توصيل لضمان وصول طعامك في الوقت المناسب وبأفضل حالة.</p>
        <div id="zummar-timeline-icon-1" class="zummar-timeline-icon">
          <i class="fas fa-biking"></i> <!-- أيقونة التوصيل -->
        </div>
      </div>
    </div>

    <!-- نقطة أخرى في التايم لاين -->
    <div id="zummar-timeline-point-2" class="zummar-timeline-point" data-aos="fade-up" data-aos-delay="200">
      <div id="zummar-timeline-content-2" class="zummar-timeline-content">
        <h3 id="zummar-timeline-heading-2">نكهات استثنائية</h3>
        <p id="zummar-timeline-description-2" class="zummar-timeline-description">جرب أطعمة فريدة مع نكهات مميزة ومكونات طازجة.</p>
        <div id="zummar-timeline-icon-2" class="zummar-timeline-icon">
          <i class="fas fa-hamburger"></i> <!-- أيقونة النكهات -->
        </div>
      </div>
    </div>

    <!-- نقطة أخرى في التايم لاين -->
    <div id="zummar-timeline-point-3" class="zummar-timeline-point" data-aos="fade-up" data-aos-delay="300">
      <div id="zummar-timeline-content-3" class="zummar-timeline-content">
        <h3 id="zummar-timeline-heading-3">أسعار تنافسية</h3>
        <p id="zummar-timeline-description-3" class="zummar-timeline-description">استمتع بألذ الأطباق بأفضل الأسعار والعروض المميزة.</p>
        <div id="zummar-timeline-icon-3" class="zummar-timeline-icon">
          <i class="fas fa-hand-holding-usd"></i> <!-- أيقونة الأسعار -->
        </div>
      </div>
    </div>
  </div>

  <!-- زر للمزيد من المعلومات -->
  <a id="zummar-more-info-btn" href="posts.php" class="zummar-more-info-btn">اكتشف المزيد عن المطاعم</a>
</div>
<!-- نهاية قسم المطاعم -->

<!-- تضمين الخطوط والمكتبة -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- استدعاء مكتبة AOS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<style>
  body {
    margin: 0;
    font-family: 'Cairo', sans-serif;
    background: #f8f8ff;
    color: #333;
  }

  #zummar-market-section {
    background: linear-gradient(145deg, #ff5722, #ff9800); /* تدرج برتقالي مميز */
    color: #fff;
    padding: 0; /* إزالة الحواف */
    box-sizing: border-box;
    width: 100%; /* جعل العرض 100% */
    margin: 0; /* إزالة المسافة بين الحواف */
    border-radius: 0; /* إزالة الزوايا المنحنية */
    box-shadow: none; /* إزالة الظل */
  }

  #zummar-header-title {
    font-size: 2.2rem;
    margin: 0;
  }

  #zummar-header-description {
    font-size: 1.1rem;
    margin: 8px 0 15px;
  }

  #zummar-timeline-container {
    position: relative;
    padding-left: 2rem;
    padding-right: 2rem;
    margin-top: 20px;
  }

  .zummar-timeline-point {
    display: flex;
    margin-bottom: 20px;
    position: relative;
    transition: transform 0.3s ease;
  }

  .zummar-timeline-point:hover {
    transform: translateY(-10px);
  }

  .zummar-timeline-point::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    width: 12px;
    height: 12px;
    background: #fff;
    border-radius: 50%;
    border: 3px solid #ff5722;
    transform: translateY(-50%);
  }

  .zummar-timeline-content {
    background: #fff;
    padding: 1rem;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    flex: 1;
    margin-left: 40px;
  }

  .zummar-timeline-content h3 {
    font-size: 1.3rem;
    margin: 0;
    color: #ff5722; /* لون عناوين */
  }

  .zummar-timeline-description {
    font-size: 1rem;
    margin: 8px 0;
    color: #ff5722; /* نفس لون العناوين */
  }

  #zummar-timeline-icon-1, #zummar-timeline-icon-2, #zummar-timeline-icon-3 {
    margin-top: 15px;
    font-size: 2.5rem;
    color: #ff5722;
    text-align: center;
    transition: transform 0.3s ease;
  }

  .zummar-timeline-point:hover .zummar-timeline-icon {
    transform: scale(1.2);
  }

  #zummar-more-info-btn {
    display: inline-block;
    background: #ff5722;
    color: #fff;
    padding: 0.8rem 2rem;
    font-size: 1.1rem;
    border-radius: 30px;
    text-decoration: none;
    transition: 0.3s;
    margin-top: 20px;
  }

  #zummar-more-info-btn:hover {
    background: #e64a19;
    color: #fff;
  }

  /* تصميم متجاوب */
  @media (max-width: 768px) {
    #zummar-market-section {
      padding: 2rem 1.5rem;
    }

    #zummar-header-title {
      font-size: 1.8rem;
    }

    #zummar-header-description {
      font-size: 1rem;
    }

    .zummar-timeline-point {
      flex-direction: column;
      align-items: flex-start;
    }

    .zummar-timeline-content {
      margin-left: 0;
    }

    #zummar-more-info-btn {
      font-size: 1rem;
      padding: 0.6rem 1.5rem;
    }
  }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // مدة الأنيميشن
    easing: 'ease-in-out', // نوع التوقيت للأنيميشن
    once: true, // الأنيميشن يحدث مرة واحدة فقط
  });
</script>















<!-- تضمين المكتبات -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<!-- تايم لاين -->
<div class="timeline">
  <!-- نقطة التايم لاين الأولى -->
  <div class="timeline-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
    <div class="timeline-icon">
      <i class="fas fa-pills"></i>
    </div>
    <div class="timeline-content">
      <h2>حجز موعد طبيب</h2>
      <p>احجز موعدك بسهولة عبر منصة زمار مع أفضل الأطباء</p>
      <a href="show_healthcare.html" class="timeline-btn">حجز موعد</a>
    </div>
  </div>

  <!-- نقطة التايم لاين الثانية -->
  <div class="timeline-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
    <div class="timeline-icon">
      <i class="fas fa-pills"></i>
    </div>
    <div class="timeline-content">
      <h2>الصيادلة والمختبرات</h2>
      <p>ابحث عن أقرب الصيدليات والمختبرات للحصول على خدمات موثوقة.</p>
      <a href="show_healthcare.html" class="timeline-btn">البحث الآن</a>
    </div>
  </div>

  <!-- نقطة التايم لاين الثالثة -->
  <div class="timeline-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
    <div class="timeline-icon">
      <i class="fas fa-moon"></i>
    </div>
    <div class="timeline-content">
      <h2>الصيدليات الخافرة</h2>
      <p>تسهيلًا للمواطنين، يمكنهم الآن معرفة الصيدليات الخافرة التي تقدم خدماتها ليلاً.</p>
      <a href="pharm/index.php" class="timeline-btn">عرض الصيدليات الخافرة</a>
    </div>
  </div>
</div>

<!-- تضمين التنسيقات -->
<style>
  body {
    font-family: 'Cairo', sans-serif;
    margin: 0;
    background: linear-gradient(135deg, #f7f8fa, #dcdde1);
    color: #333;
    overflow-x: hidden;
  }

  .timeline {
    max-width: 1000px;
    margin: 50px auto;
    padding: 0 20px;
  }

  .timeline-item {
    display: flex;
    align-items: center;
    margin: 30px 0;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    border-radius: 12px;
    overflow: hidden;
    transition: transform 0.3s ease;
  }

  .timeline-item:hover {
    transform: scale(1.05);
  }

  .timeline-icon {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    background: linear-gradient(145deg, #8e44ad, #6d3190);
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2rem;
    border-radius: 50%;
    margin: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  }

  .timeline-content {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    flex: 1;
    box-sizing: border-box;
  }

  .timeline-content h2 {
    margin: 0 0 10px;
    color: #8e44ad;
    font-size: 1.8rem;
  }

  .timeline-content p {
    margin: 0 0 15px;
    color: #555;
    font-size: 1rem;
  }

  .timeline-btn {
    display: inline-block;
    background: #8e44ad;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1rem;
    transition: background 0.3s ease;
  }

  .timeline-btn:hover {
    background: #6d3190;
  }

  @media (max-width: 768px) {
    .timeline-item {
      flex-direction: column;
      text-align: center;
    }

    .timeline-icon {
      margin-bottom: 15px;
    }
  }
</style>

<!-- تفعيل التأثيرات -->
<script>
  AOS.init({
    duration: 1000, /* مدة الحركة */
    once: true, /* الحركة مرة واحدة فقط */
  });
</script>




<!-- بداية قسم الحرفيين وطلباتهم -->
<div class="craftsmen-section">
  <header data-aos="fade-up">
    <h1>الحرفيين في منطقتنا</h1>
    <p>اكتشف الحرفيين المبدعين في منطقتك واطلب خدماتهم المميزة حسب احتياجاتك!</p>
  </header>

  <!-- التايم لاين الفني الخاص بالحرفيين -->
  <div class="craftsmen-timeline-container">
    <!-- نقطة البداية - نجارة -->
    <div class="craftsmen-timeline-point" data-aos="fade-up" data-aos-delay="100">
      <div class="craftsmen-timeline-icon">
        <i class="fas fa-cogs"></i>
      </div>
      <div class="craftsmen-timeline-content">
        <h3>النجارة</h3>
        <p>حرفيون ماهرون في تصميم وتنفيذ الأثاث المخصص وتركيب الأبواب والنوافذ.</p>
      </div>
    </div>

    <!-- نقطة أخرى - حدادة -->
    <div class="craftsmen-timeline-point" data-aos="fade-up" data-aos-delay="200">
      <div class="craftsmen-timeline-icon">
        <i class="fas fa-hammer"></i>
      </div>
      <div class="craftsmen-timeline-content">
        <h3>الحدادة</h3>
        <p>صناع محترفون في مجال صناعة الأبواب الحديدية، الشبابيك، والمصنوعات المعدنية الأخرى.</p>
      </div>
    </div>

    <!-- نقطة أخرى - كهرباء -->
    <div class="craftsmen-timeline-point" data-aos="fade-up" data-aos-delay="300">
      <div class="craftsmen-timeline-icon">
        <i class="fas fa-bolt"></i>
      </div>
      <div class="craftsmen-timeline-content">
        <h3>الكهرباء</h3>
        <p>فنيون كهربائيون لتصليح وصيانة الأنظمة الكهربائية وإصلاح الأعطال.</p>
      </div>
    </div>
  </div>

  <!-- زر للمزيد من المعلومات -->
  <a href="show_craftsmen.html" class="more-info-btn" data-aos="zoom-in" data-aos-delay="400">اكتشف المزيد من الحرفيين</a>
</div>
<!-- نهاية قسم الحرفيين -->

<!-- تضمين المكتبات -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- تضمين التنسيقات -->
<style>
  body {
    margin: 0;
    font-family: 'Cairo', sans-serif;
    background: #f0f0f0;
    color: #333;
    overflow-x: hidden; /* لمنع التمرير الأفقي */
  }

  .craftsmen-section {
    background: linear-gradient(145deg, #8ec5fc, #e0c3fc);
    padding: 3rem 1.5rem;
    width: 100%;
    margin: 40px auto;
    color: #333;
    box-sizing: border-box;
  }

  .craftsmen-section header h1 {
    font-size: 2rem;
    text-align: center;
  }

  .craftsmen-section header p {
    font-size: 1.1rem;
    margin: 8px 0 15px;
    text-align: center;
  }

  .craftsmen-timeline-container {
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    gap: 20px;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
  }

  .craftsmen-timeline-point {
    display: flex;
    align-items: center;
    gap: 15px;
    flex-wrap: nowrap;
  }

  .craftsmen-timeline-icon {
    background: #fff;
    padding: 10px;
    border-radius: 50%;
    font-size: 1.5rem;
    color: #8ec5fc;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    flex-shrink: 0;
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .craftsmen-timeline-content {
    background: #fff;
    padding: 1rem;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    flex-grow: 1;
  }

  .craftsmen-timeline-content h3 {
    font-size: 1.3rem;
    margin: 0;
    color: #8ec5fc;
  }

  .craftsmen-timeline-content p {
    font-size: 0.95rem;
    margin: 8px 0;
  }

  .more-info-btn {
    display: inline-block;
    background: #fff;
    color: #8ec5fc;
    padding: 0.8rem 2rem;
    font-size: 1rem;
    border-radius: 30px;
    text-decoration: none;
    transition: 0.3s;
    margin-top: 20px;
    text-align: center;
    max-width: 250px;
    margin-left: auto;
    margin-right: auto;
  }

  .more-info-btn:hover {
    background: #8ec5fc;
    color: #fff;
  }

  @media (max-width: 768px) {
    .craftsmen-timeline-point {
      flex-direction: row;
      align-items: center;
    }

    .craftsmen-timeline-icon {
      width: 50px;
      height: 50px;
      font-size: 1.2rem;
    }

    .craftsmen-timeline-content {
      padding: 1rem;
    }
  }
</style>

<!-- تفعيل التأثيرات -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
  });
</script>














    </div>

   

</p>
<!-- بداية قسم التعزية -->
<div class="condolence-section">
  <header>
    <h1></h1>

  
    </div>
  </header>
</div>
<!-- نهاية قسم التعزية -->

<!-- تضمين الخط والمكتبة -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">

<style>
    /* إعداد الخلفية */
    body {
      margin: 0;
      font-family: 'Cairo', sans-serif;
      background: #f7f7f7;
      color: #333;
      text-align: center;
      padding: 0;
    }

    /* رأس الصفحة */
    .condolence-section header {
      padding: 1.5rem;
      background: #000; /* خلفية سوداء */
      color: #fff; /* نص أبيض */
    }
    .condolence-section header h1 {
      font-size: 1.8rem;
      margin: 0;
    }
    .condolence-section header p {
      font-size: 1rem;
      margin: 8px 0 15px;
    }

    /* اسم المتوفي */
    .deceased-name h2 {
      font-size: 1.5rem;
      margin: 10px 0;
      font-weight: bold;
      color: #ffc107; /* لون ذهبي لجعل الاسم بارزًا */
    }
</style>
 <h2
  <h2
 <h2
</p>
 <script>

</p>
</p>
</p>
</p>




</style>


<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</body>
</html>


