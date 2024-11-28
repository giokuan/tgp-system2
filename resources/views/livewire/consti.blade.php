<div class="backdrop-blur-md bg-white/30">
    <x-mary-accordion>
        <!-- Group 1 -->
        <x-mary-collapse name="group1" :open="$group === 'group1'" wire:key="group1" wire:navigate>
            <x-slot:heading>
                {{-- <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group1')"> --}}
                    <div class="cursor-pointer text-yellow-500" wire:click="toggle('group1')" >
                    Preamble
                </div>
            </x-slot:heading>
            <x-slot:content>
           
                <div class="p-4 text-black" wire:ignore>
                    We, the members of the TAU GAMMA PHI, re-affirming our faith in God, 
                    and adhering to the Tenets and Codes of Conduct of the Fraternity, 
                    in order to strengthen the bond of brotherhood in pursuit of its ultimate goals and objectives, 
                    cognizant of the vital contribution of a collective effort to promote the general welfare of our fellowmen, 
                    to instill and develop the greatest sense of understanding and respect for human dignity under the rule of justice, 
                    freedom and democracy, do ordain and promulgate this constitution.
                </div>
              
            
            </x-slot:content>
        </x-mary-collapse>

        <!-- Group 2 -->
        <x-mary-collapse name="group2" :open="$group === 'group2'" wire:key="group2">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500" wire:click="toggle('group2')">
                    Article I
                </div>
            </x-slot:heading>
            <x-slot:content>
             
                <div class="p-4 text-black">
                   <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Name and Seal
                   </h3>
                   <p>
                        <span class="text-yellow-500">Section 1.</span><br> The fraternity shall be known as the TAU GAMMA PHI - 
                        The TriskelionGrand Fraternity. The official seal of the TAU GAMMA PHI 
                        shall be a large circle witha smaller circle inside. Between these two circles 
                        are inscribed the words TAUGAMMA PHI on the upper portion; FORTIS-VOLUNTAS-FRATERNITAS 
                        on thelower portion; the number 19 on the left side and 68 on the right. Within the 
                        smallcircle is inscribed the three-legged symbol with the Greek letters TAU, GAMMA andPHI 
                        between each of the legs. The official colors of the seal are black and gold.
                   </p>
                </div>
            
            </x-slot:content>
        </x-mary-collapse>

        <!-- Group 3 -->
        <x-mary-collapse name="group3" :open="$group === 'group3'" wire:key="group3">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500" wire:click="toggle('group3')">
                    Article II
                </div>
            </x-slot:heading>
            <x-slot:content>
          
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Declaration of Principles and Policies
                   </h3>
                   <p>
                        <p class="my-2 text-lg font-bold">Principles</p>
                        <span class="text-yellow-500">Section 1.</span>Tau Gamma Phi staunchly advocates brotherhood of men regardless of race, creed, religion, social, political, and economic status.<br> 
                        <span class="text-yellow-500">Section 2.</span>Tau Gamma Phi firmly believes in the power of reason and not in the use of force as a reason.<br>
                        <span class="text-yellow-500">Section 3.</span>Tau Gamma Phi believes in the promotion of social justice to ensure the well being and economic security of all people.<br>
                        <span class="text-yellow-500">Section 4.</span> The Tau Gamma Phi abhors violence and human right violations, however ready to defend, uphold and preserve the sovereign will of its members and of all people. <br> 
                        <span class="text-yellow-500">Section 5.</span> The Tau Gamma Phi encourages and fosters scholarship among its members. The stimulation of intellectual creativeness and the promotion of the social and physical well being of its members is of paramount concern.<br> 
                        <p class="my-2 text-lg font-bold">Policies</p>
                        <span class="text-yellow-500">Section 6.</span> The Tau Gamma Phi shall seek and help in the realization of a trulydemocratic society, adhere and promote the policy of peace, equality, unity andcooperation among all people.<br> 
                        <span class="text-yellow-500">Section 7.</span> The Tau Gamma Phi shall take an active part in the conservation of the country's natural resources, renewing those that can be renewed and campaigningagainst the exploitation of this God-given wealth.<br> 
                        <span class="text-yellow-500">Section 8.</span> The Tau Gamma Phi shall strive to mold its members into morally uprightand self-reliant individuals geared towards civic efficiency.<br> 
                   </p>
                   
                </div>
            
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group4" :open="$group === 'group4'" wire:key="group4">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group4')">
                    Article III
                </div>
            </x-slot:heading>
            <x-slot:content>
          
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Membership
                   </h3>
                   <div>
                    <span class="text-yellow-500">Section 1.</span> The Fraternity shall have four (4) categories of members:<br> 
                    <ul class="mb-2">
                        <li><span class="font-bold">SENIOR TRISKELION</span> - College students enrolled and initiated by Senior Triskelions in any college, university, and institution recognized by the National Council and individual
                        Junior Triskelion or Community-Based Chapter who has undergone welcome rites for upgrading to Senior Triskelion category and ritual ritesto full-fledged membership.</li>
                        <li><span class="font-bold">JUNIOR TRISKELION</span> - High School students initiated by Senior and/or Junior Triskelions in any high school recognized by the National Council.</li>
                        <li><span class="font-bold">COMMUNITY-BASED TRISKELION</span> - Any out-of-school youth or college student inschools or universities without chapters or affiliations with any City, Municipal or Regional Council initiated by full-fledged and/or Community-Based members,provided that such Community-Based Chapters are recognized by its Municipal,Provincial and Regional Council.</li>
                        <li><span class="font-bold">ALUMNI</span> - senior Triskelions who have graduated from college and undergraduateTriskelion who possess the following: 1 At least a bonafide member of five (5) years; 2 Gainfully employed or pursuing business</li>
                    </ul>
                    <span class="text-yellow-500">Section 2.</span> Membership to the Fraternity shall be in three (3) stages:<br>
                    <ul class="mb-2">
                        <li><span class="font-bold">PROBATIONARY</span> - newly initiated Triskelions placed under on-probation status for six (6) months or more, wherein merits and demerits are given based on hisperformance and must attend all seminars, workshops, training and meetings to beconducted by the Chapter or in cooperation with the City, Municipal, Provincial,Regional or National Council.</li>
                        <li><span class="font-bold">FULL-PLEDGED MEMBER</span> - New members who have undergone the probationaryperiod and has passed the Ritual Rites of the Fraternity.</li>
                        <li><span class="font-bold">MOST DISTINGUISHED GUARDIAN (MDG)</span> - A full-pledged member who haseffectively served for one (1) year as Grand Triskelion, or local founders or thosewho have given exemplary service in the development of the Fraternity and hasgiven it honor, integrity and prestige. Membership to the Order is bestowed by fellowMost Distinguished Guardians or MDGs upon the recommendation of the chapter Grand Triskelion and approval of the Grand Council. The provisions of this sectionshall not apply to members who have served or are currently serving as MDGs atthe time of ratification of this Constitution.</li>
                    </ul>
                    <span class="text-yellow-500 mb-2">Section 3.</span>Membership to the Fraternity shall cease upon resignation or expulsion for due cause. Members recommended for expulsion shall have the benefit of a trial or due process and may appeal to the higher organ of the Fraternity. All local chaptersmust provide the higher echelons of the Fraternity with duly-certified expulsionpapers not more than ten (10) days after its effectivity.<br>
                    <span class="text-yellow-500">Section 4.</span> Candidate members to the Tau Gamma Phi shall be qualified on the basis of the following: <br> 
                        <ul>
                            <li><span class="font-bold">He must believe in the Principles of the Fraternity.</span></li>
                            <li><span class="font-bold">He must be of good moral character.</span></li>
                            <li><span class="font-bold">He must be at least seventeen (17) years of age for Senior and Community-Based Triskelion candidates and fifteen (15) years of age for Junior Triskelion candidates.</span></li>
                            <li><span class="font-bold">must be mentally and physically fit, supported by a Medical Certificate under oath.</span></li>
                            <li><span class="font-bold">He must be willing to undergo the membership requirements.</span></li>
                            <li><span class="font-bold">He must be sponsored by any Triskelion of good standing.</span></li>
                            <li><span class="font-bold"> He must not be a member of any fraternity or organization whose principles andpurposes are contrary to those of the Tau Gamma Phi.</span></li>
                        </ul>
                    <span class="text-yellow-500">Section 5.</span> Candidate members shall be subjected to background investigation prior to interview and orientation. The Grand Council shall approve his application upon formal endorsement of the sponsor.<br> 
                    
                    </div>
                </div>
             
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group5" :open="$group === 'group5'" wire:key="group5">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group5')">
                    Article IV
                </div>
            </x-slot:heading>
            <x-slot:content>
                
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Duties and Responsibilities of a Triskelion
                   </h3>

                        <span class="text-yellow-500">Section 1.</span> Every Triskelion shall strive to lead a morally upright and virtuous life in accordance with the Tenets and Codes of Conduct of the Fraternity.<br> 
                        <span class="text-yellow-500">Section 2.</span> It shall be the duty of every Triskelion to uphold this Constitution, to give unswerving loyalty to the Fraternity, to actively contribute to its development and welfare and to abide by the rules and regulations issued by its lawful authorities.<br>
                        <span class="text-yellow-500">Section 3.</span> Every Triskelion is responsible for each other. It shall be his duty to assistand support his fellow Triskelion especially in times of crisis.<br>
                        <span class="text-yellow-500">Section 4.</span> It shall be the duty of all Triskelions to attend all meetings, and to activelyparticipate in all project and activities of the Fraternity.<br> 
                        <span class="text-yellow-500">Section 5.</span> It shall be the obligation of all Triskelion to pay the dues/fees set by its lawful authorities.<br> 
                        <span class="text-yellow-500">Section 6.</span> It shall be the duty of every qualified Triskelion to register and cast his vote in Fraternity elections, referendum, and plebiscites.<br> 
                        <span class="text-yellow-500">Section 7.</span> A Triskelion is obligated to exert his best effort to develop his potentials, physical or intellectual, in order to strengthen the Fraternity. Triskelions with special skills and talents shall heed the call of the Fraternity's leadership to lead or take partin an activity designed to countenance any critical or emergency situation.<br> 
                        <span class="text-yellow-500">Section 8.</span> It is the duty of every Triskelion to recruit new members.<br> 
                </div>
             
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group6" :open="$group === 'group6'" wire:key="group6">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group6')">
                    Article V
                </div>
            </x-slot:heading>
            <x-slot:content>
                
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Rights and Privileges of a Triskelion
                   </h3>

                        <span class="text-yellow-500">Section 1.</span> The right to equal treatment and opportunities shall not be abridgedregardless of religious belief, socio-economic and political status.<br> 
                        <span class="text-yellow-500">Section 2.</span> Every Triskelion shall have the right to express his opinions on mattersconcerning the Fraternity provided that it is put forth in a constructive manner.<br>
                        <span class="text-yellow-500">Section 3.</span> The right to be protected against exploitation, improper influences, and other conditions prejudicial to his physical, intellectual, social, political, economic andmoral development shall be guaranteed.<br>
                        <span class="text-yellow-500">Section 4.</span> Every Triskelion has the right to have access and inspect all books of accounts, records and similar materials of public character pertaining to the fraternity<br> 
                        <span class="text-yellow-500">Section 5.</span> The right of a Triskelion in good standing to actively participate in all projectsand undertakings of the Fraternity shall always be recognized.<br> 
                        <span class="text-yellow-500">Section 6.</span> Qualified full-pledged Triskelions in good standing shall have the right to runfor elective positions in the Fraternity subject to the qualifications of the position.<br> 
                        <span class="text-yellow-500">Section 7.</span> The right to join or organize legitimate organizations whose purposes arecontributory to the enhancement of the Fraternity shall not be impaired.<br> 
                </div>
              
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group7" :open="$group === 'group7'" wire:key="group7">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group7')">
                    Article VI
                </div>
            </x-slot:heading>
            <x-slot:content>
                
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Organization
                   </h3>

                        <span class="text-yellow-500">Section 1.</span> The right to equal treatment and opportunities shall not be abridgedregardless of religious belief, socio-economic and political status.<br> 
                        <span class="text-yellow-500">Section 2.</span> Every Triskelion shall have the right to express his opinions on mattersconcerning the Fraternity provided that it is put forth in a constructive manner.<br>
                        <span class="text-yellow-500">Section 3.</span> The right to be protected against exploitation, improper influences, and other conditions prejudicial to his physical, intellectual, social, political, economic andmoral development shall be guaranteed.<br>
                        <span class="text-yellow-500">Section 4.</span> Every Triskelion has the right to have access and inspect all books of accounts, records and similar materials of public character pertaining to the fraternity<br> 
                        <span class="text-yellow-500">Section 5.</span> The right of a Triskelion in good standing to actively participate in all projectsand undertakings of the Fraternity shall always be recognized.<br> 
                        <span class="text-yellow-500">Section 6.</span> Qualified full-pledged Triskelions in good standing shall have the right to runfor elective positions in the Fraternity subject to the qualifications of the position.<br> 
                        <span class="text-yellow-500">Section 7.</span> The right to join or organize legitimate organizations whose purposes arecontributory to the enhancement of the Fraternity shall not be impaired.<br> 
                </div>
                
            </x-slot:content>
        </x-mary-collapse>
    </x-mary-accordion>
</div>

