@extends('layouts.front')
@section('content')
    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2 class="text-white">
                            أهلاً بك <br>
                            أنا <span class="fw-bold">محمود إبراهيم</span><br>
                            مطوّر <strong>Back-End Laravel</strong>
                        </h2>
                        <p class="p-large text-light">
                            أعمل على بناء أنظمة ذكية، قوية، وآمنة تدعم نجاح المشاريع والشركات،
                            مع التركيز على الجودة وسهولة التوسع.
                        </p>
                        <a class="btn-solid-lg page-scroll" href="#about">اعرف عني أكثر</a>
                        <a class="btn-outline-lg page-scroll" href="#contact">
                            <i class="fas fa-user"></i> تواصل معي
                        </a>
                        <a class="btn-outline-lg page-scroll" href="{{ asset('cv/Mohamoud Ebrahim Backend.pdf') }}" download>
                            <i class="fas fa-file-download"></i> تحميل السيرة الذاتية
                        </a>


                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->



    <!-- About-->
    <div id="about" class="basic-1 bg-gray">
        <div class="container">
            <div class="row">
                <!-- النبذة -->
                <div class="col-lg-4">
                    <div class="text-container first">
                        <p>
                            خريج <strong>BIS 2025</strong><br>
                            مطوّر <strong>Back-End</strong> متخصص في
                            <span class="fw-bold">Laravel</span> و
                            <strong>PHP</strong><br>
                            مع خبرة عملية في بناء الأنظمة وإدارة قواعد البيانات باستخدام
                            <strong>MySQL</strong>.
                        </p>
                        <p>
                            أمتلك شغفاً كبيراً بتحويل الأفكار إلى حلول برمجية متكاملة،
                            وأحرص دائماً على تطوير أنظمة تتميز بـ
                            <span class="fw-bold">القوة</span>،
                            <span class="fw-bold">الأمان</span>،
                            و<span class="fw-bold">سهولة التوسع</span>
                            بما يتناسب مع متطلبات السوق واحتياجات العملاء.
                        </p>
                        <p>
                            أؤمن أن البرمجة ليست مجرد <span class="fw-bold">Code</span>،
                            بل وسيلة لصناعة الفارق وتحقيق النجاح للأفراد والشركات.
                            لذلك أركز على الجمع بين <strong>جودة الكود</strong> و
                            <strong>تجربة المستخدم (User Experience)</strong>
                            لتقديم حلول متكاملة تساهم في بناء مشاريع ناجحة طويلة المدى.
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->

                <!-- الخبرات/المشاريع -->
                <div class="col-lg-4">
                    <div class="text-container second">
                        <h6>مشاريع منجزة</h6>
                        <p>
                            - تطوير منصات إلكترونية تعليمية وخدمية.<br>
                            - إنشاء متاجر إلكترونية متكاملة مع إدارة المنتجات والسلة والدفع.<br>
                            - تصميم مواقع شخصية احترافية بواجهات بسيطة وسلسة.<br>
                            - بناء نظام بيع منتجات وإدارة العمليات اليومية.
                        </p>
                        <h6>البدايات والتجارب</h6>
                        <p>
                            بدأت رحلتي بالتركيز على أساسيات تطوير الويب
                            والتدريب العملي على
                            <strong>Laravel</strong>،
                            <strong>OOP</strong>،
                            و<strong>MySQL</strong>.
                            أنجزت عدة مشاريع تدريبية صقلت خبرتي ومنحتني القدرة
                            على تحويل المتطلبات النظرية إلى تطبيقات عملية.
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->

                <!-- المستقبل والتطوير -->
                <div class="col-lg-4">
                    <div class="text-container third">
                        <h6>رحلة تطوير مستمرة</h6>
                        <p>
                            أعمل حالياً على تعزيز مهاراتي في بناء
                            <strong>APIs</strong>،
                            استخدام أحدث ممارسات <strong>Laravel</strong>،
                            واتباع معايير <strong>Clean Code</strong>
                            لضمان جودة عالية وسهولة في الصيانة.
                        </p>
                        <p>
                            طموحي هو أن أكون شريكاً حقيقياً في نجاح المشاريع،
                            سواء مع <span class="fw-bold">Startups</span>
                            أو <span class="fw-bold">Enterprises</span>،
                            من خلال تقديم حلول تقنية تواكب التحديات وتحقق الأهداف.
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of about -->




    <!-- Services -->
    <div id="tools" class="basic-2">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="h2-heading">المهارات</h2>
                    <p class="p-heading">
                        خلال مسيرتي كمطور
                        <span class="en">Back-End</span><br>
                        ركزت على تعلم وتنفيذ مجموعة من الأدوات والتقنيات الأساسية في تطوير الويب<br>
                        هذه أبرز المهارات التي أمتلكها
                    </p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->

            <div class="row g-3">
                @foreach ($tools as $tool)
                    <x-tools :tool="$tool" />
                @endforeach

            </div><!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of services -->





    <!-- Projects -->
    <div id="projects" class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">المشاريع المنجزة</h2>
                    <p class="p-heading">فيما يلي مجموعة من أبرز المشروعات التي قمت بتنفيذها، والتي تتنوع بين مواقع عرض
                        بسيطة وتصميمات واجهات، وصولًا إلى منصات تجارة إلكترونية وأنظمة ويب متكاملة متطورة.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->

        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of projects -->


    <!-- Works -->
    <div class="basic-4">
        <div class="container" id="projects">
            <div class="row">
                @foreach ($projects as $project)
                    <x-projects :project="$project" />
                @endforeach

            
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of works -->





    <!-- Section Divider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <hr class="section-divider">
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    <!-- end of section divider -->




    <!-- Contact -->
    <div id="contact" class="form-1 bg-gray">
        <div class="container">
            <section id="contact" class="py-5 bg-light">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-4">وسائل التواصل</h2>
                            <p class="text-muted mb-4">
                                لأي مشروع أونلاين لا تتردد في التواصل معي.
                                أسرع طريقة للتواصل هي إرسال رسالة عبر البريد الإلكتروني التالي
                            </p>
                            <a class="text-primary px-4 py-2 rounded-pill text-decoration-none"
                                href="https://mail.google.com/mail/?view=cm&fs=1&to=mahmoud.backend.laravel@gmail.com"
                                target="_blank" style="transition: all 0.3s ease;">
                                mahmoud.backend.laravel@gmail.com
                            </a>

                        </div>
                    </div>
                </div>
            </section>


            <div class="row">
                <div class="col-lg-12">

                    <!-- Contact Form -->
                    <form id="contactForm" action="{{ route('dashboard.contacts.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="name" id="cname" required>
                            <label class="label-control" for="cname">الاسم</label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" name="email" id="cemail" required>
                            <label class="label-control" for="cemail">البريد</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="description" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">الرسالة</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">ارسال</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->
@endsection
