# SpecsBuilder

<h1 id="specsTitle" class="text-center mb-3">SpecsBuilder</h1>            
            <h2 id="00_About" class="ml-1">00_About</h2><ul><strong id="SpecsBuilder" class="ml-2">SpecsBuilder</strong><p class="text-justify">DevSpex is a little PHP app created in order to make dev specs writing more "dev-friendly".<br>
Did you finish and test a module ? Describe it in a simple HTML file with tags around your text (no DOCTYPE !), while you brains are still hot. <br>
At every moment, your documentation is ready to be consulted / printed / copied as HTML or plain text / or exported as a DOC file.
Without leaving your dev environment, you just have to integrate this repository to your app's folder. <br>
You can see the result thanks to the index.php file placed at the root of this repository.<br>
You are going to put your documentation in content/. By default, a basic structure is implemented. You can change the name of the folders and files existing in content/, and create as many as you want.
The files have to be inserted with an .html extension and HTML tags are supported, of course - however, don't care about DOCTYPE, HTML's head content and body tags, which are handled by index.php when it merges the specs.</p></ul><h2 id="01_Roadmap" class="ml-1">01_Roadmap</h2><ul><strong id="no_deadline" class="ml-2">no_deadline</strong><p class="text-justify">First proposed on GitHub on March 7, 2021.<br></p></ul><h2 id="02_Development" class="ml-1">02_Development</h2><ul><h3 id="01_Process" class="ml-2">01_Process</h3><ul><strong id="participate" class="ml-3">participate</strong><p class="text-justify">Wanna work on this project ? Contact me :)</p></ul><h3 id="02_Getting_started" class="ml-2">02_Getting_started</h3><ul><strong id="requirements" class="ml-3">requirements</strong><p class="text-justify">This app is written in PHP, so you need a server (local or remote) with at least Apache and PHP installed on it.<br>
This app was developed with PHP 7.4.3 and Apache 2.4.41 (Ubuntu version).<br>
Some CDN links are used to provide Bootstrap styles : you need to be connected to Internet to enjoy the expected user experience.</p></ul><h3 id="03_Frameworks_and_Tools" class="ml-2">03_Frameworks_and_Tools</h3><ul><strong id="libraries" class="ml-3">libraries</strong><p class="text-justify"><b>Bootstrap</b> library is used for style. In order to use it properly, <b>jQuery</b> is also used. CDN links are placed in the head tag of index.php.</p></ul><h3 id="04_Conventions" class="ml-2">04_Conventions</h3><ul><strong id="no-convention" class="ml-3">no-convention</strong><p class="text-justify">Nothing special to say here.</p></ul><h3 id="05_Technical_Documentation" class="ml-2">05_Technical_Documentation</h3><ul><strong id="architecture" class="ml-3">architecture</strong><p class="text-justify"></p><ul>
    <li>
        assets/<br>
        <ul class="ml-1">
            <li>
                css/<br>
                <ul class="ml-2">
                    <li>app.css</li>
                    <li>bootstrap.min.css</li>
                </ul>
            </li>
            <li>
                fonts/<br>
                <ul class="ml-2">
                    <li>
                        Open_Sans/<br>
                        <ul class="ml-3">
                            <li>LICENSE.txt</li>
                            <li>OpenSans-Regular.ttf</li>
                        </ul>
                    </li>
                    <li>
                        Raleway/<br>
                        <ul class="ml-3">
                            <li>
                                static/<br>
                                <ul class="ml-4">
                                    <li>Raleway-Black.ttf</li>
                                    <li>Raleway-BlackItalic.ttf</li>
                                    <li>Raleway-Bold.ttf</li>
                                    <li>Raleway-Bold.ttf</li>
                                    <li>...</li>
                                </ul>
                            </li>
                            <li>OFL.txt</li>
                            <li>Raleway-VariableFont_wght.ttf</li>
                            <li>README.txt</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>img/</li>
            <li>
                js/<br>
                <ul class="ml-2">
                    <li>app.js</li>
                    <li>bootstrap.min.js</li>
                    <li>jquery-3.5.1.js</li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        content/<br>
        <ul class="ml-1">
            <li>
                00_About/<br>
                <ul class="ml-2">
                    <li>SpecsBuilder.html</li>
                </ul>
            </li>
            <li>
                01_Roadmap/<br>
                <ul class="ml-2">
                    <li>no_deadline.html</li>
                </ul>
            </li>
            <li>
                02_Development/<br>
                <ul class="ml-2">
                    <li>
                        01_Process/<br>
                        <ul class="ml-3">
                            <li>participate.html</li>
                        </ul>
                    </li>
                    <li>
                        02_Getting_started/<br>
                        <ul class="ml-3">
                            <li>requirements.html</li>
                        </ul>
                    </li>
                    <li>
                        03_Frameworks_and_Tools/<br>
                        <ul class="ml-3">
                            <li>libraries.html</li>
                        </ul>
                    </li>
                    <li>
                        04_Conventions/<br>
                        <ul class="ml-3">
                            <li>no-convention.html</li>
                        </ul>
                    </li>
                    <li>
                        05_Technical_Documentation/<br>
                        <ul class="ml-3">
                            <li>architecture.html</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                03_Work_In_Progress/<br>
                <ul class="ml-2">
                    <li></li>
                </ul>
            </li>
            <li>
                04_Release_Notes/<br>
                <ul class="ml-2">
                    <li></li>
                </ul>
            </li>
            <li>
                05_Maintenance_and_Support/<br>
                <ul class="ml-2">
                    <li></li>
                </ul>
            </li>
            <li>
                06_User_Documentation/<br>
                <ul class="ml-2">
                    <li></li>
                </ul>
            </li>
            <li>
                07_Notes/<br>
                <ul class="ml-2">
                    <li>author.html</li>
                    <li>source.html</li>
                </ul>
            </li>
        </ul>
    </li>
    <li>app.php</li>
    <li>index.php</li>
</ul><p></p></ul></ul><h2 id="03_Work_In_Progress" class="ml-1">03_Work_In_Progress</h2><ul><strong id="toDo" class="ml-2">toDo</strong><p class="text-justify"><strong>PDF Export</strong>
</p><p>Implement JSPDF in app.js</p><br>
<strong>PHP inserting ?</strong>
<p>Didn't find a way to make include file.php in the display() function // app.php</p>
<p></p></ul><h2 id="04_Release_Notes" class="ml-1">04_Release_Notes</h2><ul><strong id="versions" class="ml-2">versions</strong><p class="text-justify"><u>Current version :</u>
<strong>0.0.0</strong>
<small>March 7, 2021</small>

</p><div>
    <u>Previous releases :</u><br>
    <ul>
    </ul>
</div>
<p></p></ul><h2 id="05_Maintenance_and_Support" class="ml-1">05_Maintenance_and_Support</h2><ul><h3 id="01_Infrastructure" class="ml-2">01_Infrastructure</h3><ul><strong id="check_requirements" class="ml-3">check_requirements</strong><p class="text-justify">Please refer to <a href="#requirements">the app's requirements</a>.</p></ul><h3 id="02_Deploy_Guide" class="ml-2">02_Deploy_Guide</h3><ul><strong id="deployment" class="ml-3">deployment</strong><p class="text-justify">You just have to clone this GitHub repository to your project's root, or to download it as a ZIP file, to unzip it and to put it to the root of your app.
<br>
Now you can access the default documentation with your navigator : http://myapp/SpecsBuilder
</p></ul><h3 id="03_Technical_Support" class="ml-2">03_Technical_Support</h3><ul><strong id="contact" class="ml-3">contact</strong><p class="text-justify">Do you need me to help you ? Find some <a href="#author">contact links</a> in the notes section.</p></ul><h3 id="04_Accounts" class="ml-2">04_Accounts</h3><ul><strong id="no-account" class="ml-3">no-account</strong><p class="text-justify">Is this file useful ? Hmm...</p></ul><h3 id="05_Who_s_Who" class="ml-2">05_Who_s_Who</h3><ul><strong id="anon" class="ml-3">anon</strong><p class="text-justify">Well... same comment</p></ul></ul><h2 id="06_User_Documentation" class="ml-1">06_User_Documentation</h2><ul><strong id="using_SpecsBuilder" class="ml-2">using_SpecsBuilder</strong><p class="text-justify"></p><ol>
    <li>
        Clone the GitHub repository to your project's root, or download it as a ZIP file, then unzip it and put it at the root of your app.<br>
        Now you can access the default documentation with your navigator : http://myapp/SpecsBuilder
    </li>
    <li>
        You can modify the title of your specs by changing the SpecsBuilder/ folder name.
    </li>
    <li>
        You can modify all folders under SpecsBuilder/content/ or create new ones.
    </li>
    <li>
        You can modify HTML files contained under content/, or create new ones.<br><strong>Don't insert any DOCTYPE / head / body tags.</strong>
    </li>
    <li>
        You can copy, print, export your specs !
    </li>
</ol>
<p></p></ul><h2 id="07_Notes" class="ml-1">07_Notes</h2><ul><strong id="author" class="ml-2">author</strong><p class="text-justify">Did you find this work useful ?
Visit my website <a target="_blank" href="https://quentin-g.com">here</a> ! 
You can also find me <a target="_blank" href="https://github.com/quentin-g-dev">on GitHub</a></p></ul>        
