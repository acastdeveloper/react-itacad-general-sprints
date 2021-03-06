<?php include_once("./includes/header.php"); ?>

        <div id="beltnav">
            <article>
                <section>
                    <div class="time">August, 4th, 2021</div>
                    <h4>Blurred lines?</h4> <br>
                    The creativity <br> of code / <br>the logic <br>
                    of design. <br> <a href="#">Read more...</a>
                </section>

            </article>
            <article>
                <section>
                    <div class="time">June, 3rd, 2021</div>
                    <h4>Why design?</h4> <a href="#">Read more...</a>
                </section>
            </article>
            <article>
                <section>
                    <div class="time">April, 2nd, 2021</div>
                    <h4>Be like Feynman</h4> <br>Let me tell you <br> my secret: <br> I learn more <br> by teaching.
                    <br> <a href="#">Read more...</a>
                </section>
            </article>
        </div>
        <main>
            <section>
                <article id="art-decissions">
                    <figure></figure>
                    <div>
                        <div class="small">January 9th, 2022. #DESIGN, #UX, #UI, #COMMUNICATION</div>
                        <h4>Theory of Perception 2.0</h4>
                        <section>Gestalt theory came to systematize the whole process of our perception. But today, with
                            the presence of Artificial Intelligence among us, we need to update what we thought that we
                            knew about it. </section>
                        <a href="#">Read more...</a>
                    </div>
                </article>
                <article id="art-almaguer">
                    <figure></figure>
                    <div>
                        <div class="small">November 23rd, 2021. #DESIGN, #UX, #UI</div>
                        <h4>Past, Present and Future of Digital Layout</h4>
                        <section>From the rigid diagramation layout for paper to the flexible layout multi-device.
                        </section>
                        <a href="#">Read more...</a>
                    </div>
                </article>

                <article id="art-arrow">
                    <figure></figure>
                    <div>
                        <div class="small">September 2nd, 2021. #JAVASCRIPT, #PROGRAMMING</div>
                        <h4>What is an arrow function</h4>
                        <section>In the new standard of Javascript we have new options that we must to know. </section>
                        <a href="#">Read more...</a>
                    </div>
                </article>

                <article id="art-poo">
                    <figure></figure>
                    <div>
                        <div class="small">September 2nd, 2021. #PROGRAMMING</div>
                        <h4>EVERYTHING IS AN OBJECT</h4>
                        <section>Based on reallity programming languages try to recreate relationships between objects
                            and parts of them.</section>
                        <a href="#">Read more...</a>
                    </div>
                </article>

            </section>
        </main>
        <footer>
            ?? 2021 {ac} alexandercastello.com | All rights reserved | <a href="#">Contact</a>
        </footer>
    </div>



    <!-- Google Fonts [ASYNC] -->
    <script type="text/javascript">
        /* Loading asincronaly Google Fonts once document downloading is finished */
        WebFontConfig = {
            google: {
                families: ['Noto+Sans+JP:100,300,400,500,700', 'Nunito+Sans:200,300,400,600',
                    'Oswald:200,300,400,600,700', 'Roboto+Slab:200,400,600'
                ]
            }
        };
        (function () {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- ICONS DE FONT AWESOEME -->
    <script src="https://kit.fontawesome.com/f5043cec08.js" crossorigin="anonymous"></script>


  <!-- FOUC -->
    <script type="text/javascript">
        /* To prevent FOUC while is loading page, PART 2 */
        document.getElementById("wrap").style.display = "grid";
    </script>



</body>

</html>
