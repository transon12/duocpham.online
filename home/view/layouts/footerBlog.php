 <footer class="footer-5-bg footer-5" style="background: #f1f1f1">
            <div class="footer-area pt-20 pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6 col-md-6">
                            <div class="footer-widget mb-10 footerDescription">
                                <div class="footer-text pt-5 pr-3 text-center" >
                                  <img src="<?= $base_url?>/public/assets/img/logo.png" alt="" width="100px" style="margin-bottom: 0">
                                </div>
                                <div class="footer-form pl-20 pt-3">
                                   <p style="color: #333">PHP (trực thuộc của Công ty Cổ phần Cooftech) là đơn vị công nghệ chuyên cung cấp các giải pháp xử lý đa luồng từ phần mềm, phần cứng đến các dịch vụ thiết kế, lập trình website chuyên nghiệp tại Hà Nội với kho giao diện web có sẵn đa dạng hoặc thiết kế website riêng theo nhu cầu. Chỉ cần bạn có ý tưởng, PHP sẽ giúp bạn hiện thực hóa ý tưởng đó, giúp bạn kiếm tiền hiệu quả.  Sau hơn 4 năm hoạt động, Cooftech đã có hơn 1000+ website, hơn 300+ dự án, hơn 500+ khách hàng trong và ngoài nước, trong đó có các đối tác lớn, như: PasGo, Vinpearl, Kids Plaza; Chuỗi khách sạn A25 Hotel,…</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="footer-widget pt-2 mb-40 pl-30">
                                <h3 style="color: #333">Địa chỉ liên hệ </h3>
                                <div class="footer-contact">
                                    <ul>
                                        <li style="color: #333">
                                            <i   style="color: #333" class="far fa-map-marked-alt"></i>
                                             <p style="color: #333">Số 2A Xuân Phương, P.Phương Canh, Q.Nam Từ Liêm, Hà Nội.</p>
                                        </li>
                                        <li  style="color: #333">
                                            <i class="far fa-phone"></i>
                                            <p style="color: #333">+84 358.685.840</p>
                                        </li>
                                        <li style="color: #333">
                                            <i class="fal fa-envelope-open"></i>
                                            <p  style="color: #333"> hotro@cooftech.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <a href="<?= $base_url?>/lien-he" class="btn btn-success"><span>liên hệ</span></a>
        </footer>
        <script type=”application/ld+json”>
 
            {
             
              "@context": "http://schema.org",
             
              "@type": "Organization",
             
              "name": "php",
             
              "description": "Cong ty phan mem thiet ke website PHP",
             
              "address": {
             
                "@type": "PostalAddress",
             
                "addressLocality": "Ha Noi City, VN",
             
                "streetAddress": "So 2A Xuan Phuong, P.Phuong Canh, Q.Nam Tu Liem"
             
              },
             
              "openingHours": [
             
                "Mo-Sa 09:00-18:00",
             
                "Su 14:00-18:00"
             
              ],
             
              "telephone": "+84358685840",
             
              "menu": "https://www.php.vn"
             
            }

 
</script>
<script type="application/ld+json">
    {
        "@context":"http://schema.org",
        "@type":"NewsArticle",
        "mainEntityOfPage":{
            "@type":"WebPage",
            "@id":"<?= $detail_blog['title_url']?>"
        },
        "headline":"<?= $detail_blog['title']?>",
        "description":"<?= $detail_blog['description']?>",
        "image":{
            "@type":"ImageObject",
            "url":"<?= $base_url?>/public/assets/favicon/apple-icon-57x57.png",
            "width":720,
            "height":480
        },
        "datePublished":"",
        "dateModified":"",
        "author":{
            "@type":"Person",
            "name":"PHP"
        },
        "publisher":{
            "@type": "Organization",
            "name":"PHP",
            "logo":{
                "@type":"ImageObject",
                "url":"<?= $base_url?>/public/assets/favicon/apple-icon-57x57.png"
            }
        }
    }
</script>
