<div class="backdrop-blur-md bg-white/30">
    <x-mary-accordion>
        <!-- Group 1 -->
        <x-mary-collapse name="group1" :open="$group === 'group1'">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group1')">
                    History
                </div>
            </x-slot:heading>
            <x-slot:content>
                <div class="p-4 text-black">
                    Tau Gamma Phi, or the Triskelions' Grand Fraternity, 
                    was founded at the University of the Philippines, Diliman, 
                    on October 4, 1968, by four student leaders, later known as the 
                    "Four Founding Fathers": Rod Confesor, Roy Ordinario, Talek Pablo, 
                    and Tito Venida. Established to reform the fraternity system and promote 
                    the Triskelion principles of unity, strength, and service, it grew to become 
                    the largest fraternity in the Philippines, with over 800,000 members across universities, 
                    communities, and international alumni organizations. Despite challenges, including 
                    fraternity violence, the fraternity advocated for peace through strength and mutual respect, 
                    organizing inter-fraternity alliances and fostering unity. Its first Grand Triskelion, 
                    Rod Confesor, led the fraternity to prominence, particularly within U.P.'s College of Arts and 
                    Sciences, setting the foundation for its lasting legacy.
                </div>
            </x-slot:content>
        </x-mary-collapse>

        <!-- Group 2 -->
        <x-mary-collapse name="group2" :open="$group === 'group2'">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500" wire:click="toggle('group2')">
                    Tenets
                </div>
            </x-slot:heading>
            <x-slot:content>
                <div class="p-4 text-black">
                    <ul>
                        <li>
                            1. TAU GAMMA PHI is the TRISKELION GRAND FRATERNITY, my Fraternity, the SupremeFraternity. 
                        </li>
                        <li> 
                            2. PRIMUM NIL NOCERE first of all do not harm, let alone in defense of one self for what ever cause man has come into being, for whatever he is destined kin to all living creatures around him, man is brother unto man. 
                        </li>
                        <li> 
                            3. DE GUSTIBUS NON DESPUTANDUM EST of likes and dislikes there shouldl be no disputing live and let live. 
                        </li>
                        <li>
                            4. Preserved your self, brawn, brain & blood. 
                        </li>
                        <li>
                            5. Brothers I shall love and respect thy counsel and I shall heed. 
                        </li>
                        <li>
                            6._____________________Chapter is my Alma matter to Love, to Cherish and to Honor by its rules and regulation be governed and be guided. 
                        </li>
                        <li>
                            7. The GRAND TRISKELION is righteous, just and strong he shall be obeyed 
                        </li>
                        <li> 
                            8. A TRISKELION is a Brother Unto his fellow TRISKELION 
                        </li>
                    </ul>
                </div>
            </x-slot:content>
        </x-mary-collapse>

        <!-- Group 3 -->
        <x-mary-collapse name="group3" :open="$group === 'group3'">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500" wire:click="toggle('group3')">
                    Codes of Conduct
                </div>
            </x-slot:heading>
            <x-slot:content>
                <div class="p-4 text-black">
                    <ul>
                        <li> 
                            <span class="text-yellow-500 font-bold">T</span> - Treat other as you would like others treat you. 
                        </li>
                        <li> 
                            <span class="text-yellow-500 font-bold">R</span> - Rise to defend the name and honor of the fraternity, whenever it is unjustly criticized. 
                        </li>
                        <li> 
                            <span class="text-yellow-500 font-bold">I</span> - Inform and orient you fellow brother, which you consider vital to the fraternity. 
                        </li>
                        <li> 
                            <span class="text-yellow-500 font-bold">S</span> - Salute and address your fellow brothers in a proper manner. 
                        </li>
                        <li> 
                            <span class="text-yellow-500 font-bold">K</span> - Keep decorum in all fraternity meetings, and act accordingly inside and outside of the fraternity. 
                        </li>
                        <li> 
                            <span class="text-yellow-500 font-bold">E</span> - Excel in your chosen field of interest and endeavor. 
                        </li>
                        <li> 
                            <span class="text-yellow-500 font-bold">L</span> - Live a life of moderation, avoid gluttony, drunkness and other vices, less you forget GOD, FAMILY, HEALTH, STUDIES and FRATERNITY. 
                        </li>
                        <li> 
                            <span class="text-yellow-500 font-bold">I</span> - In your everyday life take care of what you say, write or do, to avoid misinterpretation and lasting misunderstanding. 
                        </li>
                        <li> 
                            <span class="text-yellow-500 font-bold">O</span> - Obey all fraternity rules and regulation, be governed and guided by the TENETS AND CODES OF CONDUCT. 
                        </li>
                        <li> 
                            <span class="text-yellow-500 font-bold">N</span> - Never reveal to anyone, NOT to your friends, nor to your family the concern of the fraternity 
                        </li>
                    </ul>
                </div>
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group4" :open="$group === 'group4'">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group4')">
                    Triskelion Prayer
                </div>
            </x-slot:heading>
            <x-slot:content>
                <div class="p-4 text-black">
                    Almighty God bless this brotherhood of ours so that we can succeed in all the endeavours, 
                    enlighten and strengthen of our Secretary General, Goovernor General, Council Chairmen, Grand Triskelion 
                    and Grand Lady Triskelion for then to maintain the highest standard of decisionand 
                    making for a better success for TAU GAMMA PHI TRISKELION GRAND FRATERNITY 
                    and SORORITY amen
                </div>
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group5" :open="$group === 'group5'">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group5')">
                    Triskelion Hymn
                </div>
            </x-slot:heading>
            <x-slot:content>
                <div class="p-4 text-black">
                    <ul>
                        <li>
                            Ang Aking Mahal
                            Na Kapatiran
                            Ang Tau Gamma Phi ang siyang
                            Patnubay sa Buhay
                            Ipagtanggol kung Pangala'y
                            Inaapi Bigyan siya ng Karangalan
                            At ng Kalingang di Magmamaliw
                        </li>
                        <li>
                            Ang Aking Mahal
                            Na Kapatiran
                            Ang Tau Gamma Phi ang siyang
                            Patnubay sa Buhay
                            Ipagtanggol kung Pangala'y
                            Inaapi Bigyan siya ng Karangalan
                            At ng Kalingang di Magmamaliw
                        </li>
                        <li>
                            Ang Aking Mahal
                            Na Kapatiran
                            Ang Tau Gamma Phi ang siyang
                            Patnubay sa Buhay
                            Ipagtanggol kung Pangala'y
                            Inaapi Bigyan siya ng Karangalan
                            At ng Kalingang di Magmamaliw.
                        </li>
                    </ul>
                </div>
            </x-slot:content>
        </x-mary-collapse>
    </x-mary-accordion>
</div>
