<div id="getintouch" class="footer-container">
    <div class="footer">
        <div class="contact">
            <h3>Bizimlə Əlaqəyə Keçin!</h3>
        </div>
        <hr>
        <div class="footer-flex">
            <div class="footer1">
                <div>
                    <h4>Məlumat</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Lorem, ipsum dolor sit amet
                        consectetur adipisicing elit. PerspicLorem, <br>ipsum dolor sit amet consecte tur
                        adipisicing elit. Perspicgsrddtydia</p>
                </div>
                <div>
                    <h4>Əlaqə Nömrəsi</h4>
                    <a id="tel" style="color:#fff" href="tel:+994557632301">+994557632301</a><br>
                    <a id="tel" style="color:#fff" href="tel:+994557632301">+994557632301</a>
                </div>
                <div>
                    <h4>Ünvan</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Lorem, ipsum dolor sit amet
                        consectetur adipisicing elit. PerspicLorem, <br>ipsum dolor sit amet consecte tur
                        adipisicing elit. Perspicgsrddtydia</p>
                </div>
                <div>
                    <h4>Bizi İzləyin</h4>
                    <a
                        href="https://l.instagram.com/?u=https%3A%2F%2Fwa.me%2Fmessage%2FEJXY47UIHHMJP1&e=ATPoLFHsIA9cCYBcP_UQYVWe9Yyn980a3sgddlG_87lFdkYVyKqV1jzaQInw2xAU0flQkQYVmGHOVPokRKIVJw&s=1"><img
                            src="{{asset('front/')}}/resources/img/blog/(whatsapp).svg" alt=""></a>
                    <a href="https://www.instagram.com/smartstudy.ltd/"><img src="{{asset('front/')}}/resources/img/blog/(instagram).svg"
                            alt=""></a>
                    <a href="https://www.facebook.com/smartstudy.llc"><img src="{{asset('front/')}}/resources/img/blog/(facebook).svg"
                            alt=""></a>
                    <img src="{{asset('front/')}}/resources/img/blog/(linkedin-in).svg" alt="">
                    <img src="{{asset('front/')}}/resources/img/blog/(telegram-plane).svg" alt="">
                </div>
            </div>
            <div class="footer2">
                <div>
                    <h3>Müraciət Et</h3>
                </div>
                <div>
                    <form id="form" action="{{route('messages.store')}}" method="POST">
                        @csrf
                        <input type="text" placeholder="Ad" name="name" required>
                        <input type="number" placeholder="Əlaqə Nöm." name="number" required>
                        <input type="text" placeholder="Soyad" name="lastName" required>
                        <select name="topic" id="">
                            <option selected disabled>Seçin</option>
                            <option value="Xaricdə Təhsil">Xaricdə Təhsil</option>
                            <option value="Dil kursları">Dil kursları</option>
                            <option value="Hazırlıq">Hazırlıq</option>
                        </select>
                        <input id="biginput" type="text" placeholder="" name="message" required>
                        <button id="submit" type="submit">Göndər</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright &copy; 2021 <a href="http://deirvlon.com/az"><b>Deirvlon Technologies.</b></a></p>
            <p> All rights are reserved. </p>
        </div>
    </div>
</div>
</div>


@livewireScripts
</body>

</html>