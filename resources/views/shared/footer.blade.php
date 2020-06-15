
    <footer class="footer_section">
        <div class="container">
            <section class="footer_info">
                {{-- Footer sx --}}
                <div class="footer_info-brand">
                    <h2>
                        <a href="{{ Route('static-page.home') }}"><img src="https://www.boolean.careers/images/common/logo-white.png" alt="logo boolean bianco"></a>
                    </h2>
                    <ul>
                        <li>Sede operativa</li>
                        <li>Via Carducci 12 - 20123 Milano</li>
                        <li>Tel: 02-40031288</li>
                    </ul>
                </div>
    
                <div class="footer_menu-list">
                    <ul class="footer-action list-style">
                        <li><a href="#">Lezione gratuita</a></li>
                        <li><a href="{{ Route('static-page.privacy') }}">Privacy</a></li>
                        <li><a href="{{ Route('static-page.faq') }}">Faq</a></li>
                        <li><a href="#">Lavora con noi</a></li>
                    </ul>
                </div>
                
            </section>
    
            <section class="footer_social container">
                <ul class="social-list">
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-linkedin-in"></i></li>
                    <li><i class="fab fa-youtube"></i></li>
                </ul>
                <p>Boolean SRL - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</p>
            </section>
        </div>
    </footer>

    @yield('script')
    
</body>
</html>