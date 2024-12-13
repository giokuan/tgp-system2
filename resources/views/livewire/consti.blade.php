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
                        shall be a large circle with a smaller circle inside. Between these two circles 
                        are inscribed the words TAU GAMMA PHI on the upper portion; FORTIS-VOLUNTAS-FRATERNITAS 
                        on the lower portion; the number 19 on the left side and 68 on the right. Within the 
                        small circle is inscribed the three-legged symbol with the Greek letters TAU, GAMMA and PHI 
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
                        <span class="text-yellow-500">Section 7.</span> The Tau Gamma Phi shall take an active part in the conservation of the country's natural resources, renewing those that can be renewed and campaigning against the exploitation of this God-given wealth.<br> 
                        <span class="text-yellow-500">Section 8.</span> The Tau Gamma Phi shall strive to mold its members into morally upright and self-reliant individuals geared towards civic efficiency.<br> 
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
                        <li><span class="font-bold">COMMUNITY-BASED TRISKELION</span> - Any out-of-school youth or college student inschools or universities without chapters or affiliations with any City, Municipal or Regional Council initiated by full-fledged and/or Community-Based members,provided that such Community-Based Chapters are recognized by its Municipal, Provincial and Regional Council.</li>
                        <li><span class="font-bold">ALUMNI</span> - senior Triskelions who have graduated from college and undergraduate Triskelion who possess the following: 1 At least a bonafide member of five (5) years; 2 Gainfully employed or pursuing business</li>
                    </ul>
                    <span class="text-yellow-500">Section 2.</span> Membership to the Fraternity shall be in three (3) stages:<br>
                    <ul class="mb-2">
                        <li><span class="font-bold">PROBATIONARY</span> - newly initiated Triskelions placed under on-probation status for six (6) months or more, wherein merits and demerits are given based on his performance and must attend all seminars, workshops, training and meetings to be conducted by the Chapter or in cooperation with the City, Municipal, Provincial,Regional or National Council.</li>
                        <li><span class="font-bold">FULL-PLEDGED MEMBER</span> - New members who have undergone the probationary period and has passed the Ritual Rites of the Fraternity.</li>
                        <li><span class="font-bold">MOST DISTINGUISHED GUARDIAN (MDG)</span> - A full-pledged member who has effectively served for one (1) year as Grand Triskelion, or local founders or those who have given exemplary service in the development of the Fraternity and has given it honor, integrity and prestige. Membership to the Order is bestowed by fellow Most Distinguished Guardians or MDGs upon the recommendation of the chapter Grand Triskelion and approval of the Grand Council. The provisions of this section shall not apply to members who have served or are currently serving as MDGs atthe time of ratification of this Constitution.</li>
                    </ul>
                    <span class="text-yellow-500 mb-2">Section 3.</span>Membership to the Fraternity shall cease upon resignation or expulsion for due cause. Members recommended for expulsion shall have the benefit of a trial or due process and may appeal to the higher organ of the Fraternity. All local chaptersmust provide the higher echelons of the Fraternity with duly-certified expulsion papers not more than ten (10) days after its effectivity.<br>
                    <span class="text-yellow-500">Section 4.</span> Candidate members to the Tau Gamma Phi shall be qualified on the basis of the following: <br> 
                        <ul>
                            <li><span class="font-bold">He must believe in the Principles of the Fraternity.</span></li>
                            <li><span class="font-bold">He must be of good moral character.</span></li>
                            <li><span class="font-bold">He must be at least seventeen (17) years of age for Senior and Community-Based Triskelion candidates and fifteen (15) years of age for Junior Triskelion candidates.</span></li>
                            <li><span class="font-bold">must be mentally and physically fit, supported by a Medical Certificate under oath.</span></li>
                            <li><span class="font-bold">He must be willing to undergo the membership requirements.</span></li>
                            <li><span class="font-bold">He must be sponsored by any Triskelion of good standing.</span></li>
                            <li><span class="font-bold"> He must not be a member of any fraternity or organization whose principles and purposes are contrary to those of the Tau Gamma Phi.</span></li>
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

                        <span class="text-yellow-500">Section 1.</span> The right to equal treatment and opportunities shall not be abridged regardless of religious belief, socio-economic and political status.<br> 
                        <span class="text-yellow-500">Section 2.</span> Every Triskelion shall have the right to express his opinions on matters concerning the Fraternity provided that it is put forth in a constructive manner.<br>
                        <span class="text-yellow-500">Section 3.</span> The right to be protected against exploitation, improper influences, and other conditions prejudicial to his physical, intellectual, social, political, economic andmoral development shall be guaranteed.<br>
                        <span class="text-yellow-500">Section 4.</span> Every Triskelion has the right to have access and inspect all books of accounts, records and similar materials of public character pertaining to the fraternity<br> 
                        <span class="text-yellow-500">Section 5.</span> The right of a Triskelion in good standing to actively participate in all projects and undertakings of the Fraternity shall always be recognized.<br> 
                        <span class="text-yellow-500">Section 6.</span> Qualified full-pledged Triskelions in good standing shall have the right to runfor elective positions in the Fraternity subject to the qualifications of the position.<br> 
                        <span class="text-yellow-500">Section 7.</span> The right to join or organize legitimate organizations whose purposes are contributory to the enhancement of the Fraternity shall not be impaired.<br> 
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

                        <span class="text-yellow-500 ">Section 1.</span> The National Council:<br> 
                        <p>
                            The National Council of the Tau Gamma Phi shall be the final authority in the management and administration of the affairs of the Fraternity.The National Council shall be composed of:
                        </p>
                        <ul class="mb-2">
                            <li>1. The National Assembly</li>
                            <li>2. The National Executive Council</li>
                            <li>3. The Judicial Council</li>
                        </ul>
                        <span class="text-yellow-500 my-2">Section 2.</span> The National Assembly<br>
                        <p>
                            The National Assembly shall be the highest policy-making body of the Fraternity. <br>
                            The National Assembly shall be composed of all the incumbent duly elected Regional Secretary-Generals and Provincial Governor-Generals and shall functionas a collegial body.
                        </p>
                        <p class="my-2 font-bold">
                            The National Assembly shall have the following powers and functions:
                        </p>
                        <ul>
                            <li>1. To elect the officers of the National Executive Council.</li>
                            <li>2. To analyze, evaluate, deliberate on and render decisions regarding programs, policies and developmental plans of the National Executive Council.</li>
                            <li>3. To enact a national budget to be supported by available funds as certified bythe National Treasurer or to be raised by corresponding revenue proposals submitted by the National Secretariat.</li>
                            <li>4. To act on all proposed amendments or revisions to this Constitution.</li>
                            <li>5. To establish the rules of its proceedings and to conduct inquiries in aid of legislation in accordance with its duly published rules and procedures.</li>
                            <li>6. A quorum, which is fifty percent plus one (50%+1) shall first be established, andthat two-thirds (2/3) of the members present who are duly notified, can override theveto power of the Premier.</li>
                            <li>7. The National Assembly may punish its members for disorderly behavior and to suspend them with the concurrence of two-thirds (2/3) of all its members</li>
                        </ul>
                        <p class="my-2 font-bold">
                            Meetings, Quorum and Manner of Voting of the National Assembly:
                        </p>
                        <ul>
                            <li>1. The National Assembly shall holds its annual meeting on the last week of January of every fiscal year at the principal office or at any place within the area of operation of the Fraternity. Special National Assembly meetings may be called to consider urgent matters requiring National Assembly decisions upon orders of the Premier or upon petition of at least forty percent (40%) of its members.</li>
                            <li>2. At all annual or special meetings of the National Assembly, fifty percent plus one(50%+1) of the total number of members shall constitute a quorum.</li>
                            <li>3. Recognized Regional Secretary Generals and Provincial Governor Generals or their duly authorized representatives, who are physically present in National Assembly meetings shall be qualified to vote, participate in all deliberations, and in all decision making.</li>
                        </ul>

                        <span class="text-yellow-500 my-2">Section 3.</span> The NATIONAL EXECUTIVE COUNCIL: <br>
                        <p class="my-2 font-bold">
                            The National Executive Council is vested upon by this Constitution with the power to implement and execute its contents and all policies, rules and regulations affecting the existence of the Fraternity.
                        </p>
                        <p class="my-2 font-bold">
                            The National Executive Council shall be composed of the following:
                        </p>
                        <ul>
                            <li>1. The Premier</li>
                            <li>2. The Executive Vice-Premier</li>
                            <li>3. The Vice-Premier for Luzon</li>
                            <li>4. The Vice-Premier for Vizayas</li>
                            <li>5. The Vice-Premier for Mindanao</li>
                            <li>6. The Vice-Premier for International Affairs</li>
                            <li>7. The National Executive Secretary</li>
                            <li>8. The National Secretariat Officers</li>
                            <li>9. The National Treasurer</li>
                            <li>10. The National Auditor</li>
                        </ul>

                        <p class="my-2 font-bold">
                            The National Executive Council shall have the following powers and functions:
                        </p>
                        <ul>
                            <li>1. To devise mechanisms for the smooth implementation of the program thrusts, policies and priorities of the Fraternity as determined by the National Assembly.</li>
                            <li>2. To prepare an annual program for budget and to submit the same to the National Assembly for approval.</li>
                            <li>3. To bestow final approval of recognition to newly created chapters or councils andto suspend the recognition of chapters upon the recommendation of the Regional Councils.</li>
                            <li>4. To adopt policies for fund sourcing, capital build-up, loans, acquisitions of properties, collection of dues and fees for the benefit of the Fraternity.</li>
                            <li>5. To issue circulars, memoranda, and policy instructions to ensure the strict compliance with this Constitution and revisions in national policies and programs approved by the National Assembly.</li>
                            <li>6. In case of national emergency, where the National Assembly cannot be convened, the National Executive Council may decide for and in behalf of the best interests of the Fraternity.</li>
                            <li>7. To create other committees and offices deemed necessary for the efficient and effective implementation of programs and policies of the National Council.</li>
                        </ul>
                        <span class="text-yellow-500 my-2">Section 4.</span> OFFICERS of the NATIONAL EXECUTIVE COUNCIL: <br> 
                        <p class="my-2 font-bold">
                            THE PREMIER:
                        </p>
                        <ul>
                            <li>1. The executive powers of the Fraternity shall be vested in the Premier of the TauGamma Phi. No member may be elected Premier unless he has served as Secretary General of any recognized Regional Council of the Fraternity or Governor General of any recognized Provincial Council.</li>
                            <li>2. The Premier shall be elected by a majority vote of all the members of the National Assembly and shall hold office for a term of two years (2) and shall be eligible for re-election. However the Premier shall serve for not more than two successive terms.</li>
                            <li>3. Powers and Functions of the Premier:</li>
                            <ul>
                                <li>- To exercise general supervision of all the local councils, executive offices and committees as may be provided by this Constitution.</li>
                                <li>- To appoint and remove the National Executive Secretary; the heads of the different executive offices and committees; the National Treasurer, and the National Auditor.</li>
                                <li>- To report on the state of the Fraternity in annual National Assembly meetings.</li>
                                <li>- To recommend to the National Assembly measures necessary and expedient whichmust be acted upon before adjournment of a National Assembly meeting.</li>
                                <li>- To preside over the meetings of the National Executive Council.</li>
                                <li>- To exercise the power to veto bills amending this Constitution or revisions in national policies previously decided upon by the National Assembly.</li>
                                <li>- To enter into contracts, agreements or pacts with other legitimate organizations andentities which shall be beneficial to the Fraternity provided that he gets the concurrence of at least two-thirds (2/3) of total number of present members in the National Assembly.</li>
                            </ul>
                        </ul>
                        <p class="my-2 font-bold">
                            THE EXECUTIVE VICE-PREMIER:
                        </p>
                        <P>
                            shall be the presiding officer of the National Assembly, and to represent the Premier in meetings and other functions when the latter cannot be physically present and shall perform other duties and responsibilities that may be assigned by the National Council. For whatever valid reason that the Premier couldnot continue to perform his duties and responsibilities, the Executive Vice-Premier shall automatically assume the position of Premier and shall serve the remaining term of office of the Premier.
                        </P>

                        <P class="my-2 font-bold">
                            The Vice-Premier for LUZON; the Vice- Premier for VISAYAS; the Vice- Premier for MINDANAO; and the Vice-Premier for INTERNATIONAL AFFAIRS:
                        </P>
                        <ul>
                            <li>1. The Vice-Premier for Luzon; the Vice-Premier for Visayas; the Vice-Premier for Mindanao; and the Vice-Premier for International Affairs are duly- elected national officials. No member shall be elected Vice-Premier unless he has served as Secretary General of any recognized Regional Council or Governor General of any recognized Provincial Council.</li>
                            <li>2. Powers and Functions of the Vice-Premier for Luzon; the Vice- Premier for Visayas; the Vice-Premier for Mindanao; and the Vice-Premier for International Affairs:</li>
                            <ul>
                                <li>- To assist and support the Premier in the performance of the latter duties.</li>
                                <li>- To supervise the operations of all the Regional Councils in their respective territorial jurisdictions.</li>
                                <li>- To screen, recommend, expedite, facilitate and decide on issues and concerns brought forth by the various Regional and Provincial Councils within his territorial jurisdiction.</li>
                                <li>- To formulate developmental plans in line with the general thrusts of the area and submit the same to the National Executive Council for deliberation and approval.</li>
                                <li>- To consolidate and submit to the National Assembly and National Executive Council quarterly accomplishment and status reports of the different Regional Councils under his jurisdiction.</li>
                                <li>- To facilitate and coordinate the establishment of the City, Municipal, provincial, and Regional Councils within his jurisdiction and strengthen the same in line with national policies.</li>
                            
                            </ul>
                        </ul>

                        <p class="my-2 font-bold">
                            The NATIONAL EXECUTIVE SECRETARY:
                        </p>
                        <ul>
                            <li>1. The National Executive Secretary shall act as the head of the National Secretariat and shall supervise its over-all operations.</li>
                            <li>2. The National Executive Secretary must be a member of the Most Distinguished Order of the Guardians and shall be appointed by the Premier</li>
                            <li>3. Duties and functions of the National Executive Secretary:</li>
                            <ul>
                                <li>- To ensure that the various echelons of the fraternal organization are functioning efficiently on their prime concerns.</li>
                                <li>- To assign the specific tasks of the various office and committee heads in conformity with the policies and programs of the National Council.</li>
                                <li>- To take responsibility for the record keeping of all meetings of the National Assemblyand the National Executive Council and to furnish copies to all the members of both branches.</li>
                            </ul>
                        </ul>

                        <p class="my-2 font-bold">
                            The NATIONAL TREASURER:
                        </p>
                        <p>
                            shall have the following functions and responsibilities:
                        </p>
                        <ul>
                            <li>1. To formulate programs and schemes for budgeting and collection of dues and/or fee.</li>
                            <li>2. To submit quarterly and annual financial reports to the National Council.</li>
                            <li>3. To identify, secure, develop and maintain financial sources for the Fraternity.</li>
                            <li>4. To exercise technical supervision of the budget and finance offices in the lower structures of the Fraternity.</li>
                            <li>5. To devise effective and efficient financial mechanisms and structures.</li>
                            <li>6. To disburse funds of the National Council in accordance with the National Budget and in strict compliance with the established rules and regulations.</li>
                            <li>7. To post an adequate bond from a reputable insurance company acceptable tothe National Executive Council in such amount which might be fixed by the former.</li>
                            <li>8. To keep charge of the funds, securities, titles, deeds, receipts, and disbursements of the Fraternity.</li>
                            <li>9. To deposit or cause to be deposited all moneys and other valuable effects inthe name and to the credit of the Fraternity in such banks or trust companies as the National Executive Council may from time to time designate.</li>
                            <li>10. To render to the National Executive Council or to the National Assembly whenever required an account of the financial condition of the Fraternity and at theclose of calendar year to submit a like report for such calendar year.</li>
                            <li>11. To keep correct Books of Account of all the business transactions of the Fraternity.</li>
                            <li>12. To advise the National Council regarding disposition of funds and other matters relative to financial matters.</li>
                        </ul>

                        <p class="my-2 font-bold">
                            The NATIONAL AUDITOR:
                        </p>
                        <P>
                            The National Auditor shall be appointed by the Premier upon the recommendation of the National Executive Secretary and shall come from the ranks of the Most Distinguished Order of the Guardians and shall serve a four (4) year's term. The National Auditor shall be a Certified Public Accountant and preferably a Most Distinguish Guardian (MDG).
                        </P>
                     
                        <P>
                            The National Auditor shall have the following function and responsibilities:
                        </P>
                        <ul>
                            <li>1. To take charge of both the accounting and internal audit services of the National Council.</li>
                            <li>2. To install and maintain an internal audit system in all echelons of the national structure.</li>
                            <li>3. Apprise the National Council officials on the financial condition and operations of the council and committees concerned.</li>
                            <li>4. Certify to the availability of the budget allotment to which expenditures andobligations may be properly charged.</li>
                            <li>5. To install and maintain an effective accounting system in coordination withthe National Treasurer.</li>
                        </ul>
                        <span class="text-yellow-500 my-2">Section 5.</span>The NATIONAL SECRETARIAT: <br> 
                        <p class="my-2 font-bold">
                            The National Secretariat shall administer to the day to day activities of the National Executive Council.
                        </p>
                        <p>
                            The National Secretariat shall be composed of the following:
                        </p>
                        <ul>
                            <li>1. The National Executive Secretary</li>
                            <li>2. The Secretary for Information and Communication</li>
                            <li>3. The Secretary for Membership and Organization</li>
                            <li>4. The Secretary for the Interior</li>
                            <li>5. The Secretary for Special Projects</li>
                            <li>6. The Secretary for Alumni Affairs.</li>
                        </ul>
                        <p class="my-2 font-bold">
                            The Secretary for <span class="text-yellow-500">INFORMATION AND COMMUNICATION</span> shall have the following functions and responsibilities:
                        </p>
                        <ul>
                            <li>1. To disseminate notices of meeting, consultations, dialogues seminars and circular orders, memoranda, policy instructions and other information materials of the National Council to the lower structures of the Fraternity.</li>
                            <li>2. To supervise the over-all operations and ensure the continuous circulation of the official publication of the National Council.</li>
                            <li>3. To submit quarterly and annual reports on communication capabilities and information dissemination potentials</li>
                            <li>4. To coordinate with the Secretary for Membership and Organization in the maintenance and upgrading of a secured national database.</li>
                            <li>5. To establish and maintain a National Council Website</li>
                            <li>6. To continuously upgrade and streamline existing communication capabilities.</li>
                            <li>7. To establish and maintain a speaker's and trainer's bureau to complement the activities of the various national offices and committees.</li>
                        </ul>
                        <p class="my-2 font-bold">
                            The Secretary for <span class="text-yellow-500">MEMBERSHIP AND ORGANIZATION</span> shall have the following functions and responsibilities:
                        </p>
                        <ul>
                            <li>1. To initiate and continuously gather the list of Triskelions initiated from 1968 tothe present with the corresponding updated background information and encode the same to as secure database.</li>
                            <li>2. To formulate the National Standard Procedures for Membership to the Fraternity in accordance with National Council mandates and ensures the strict implementation of the same.</li>
                            <li>3. To screen and recommend the recognition or suspension of recognition of chapters and councils upon recommendation and endorsement of the lower echelons of the Fraternity.</li>
                            <li>4. To formulate, monitor and conduct continuing programs on leadership and service to fellowmen and symposiums on how to improve the quality of members.</li>
                            <li>5. To submit quarterly and annual reports to the National Executive Council regarding membership strength and capabilities, achievements and program proposals.</li>
                            <li>6. To devise, initiate and implement programs geared towards the social, economic, educational and moral upliftment of all Triskelions and foster constructive interaction among all members.</li>
                            <li>7. To research, analyze, formulate and implement programs towards establishing and maintaining harmonious relationships with other fraternities and legitimate organizations</li>
                            <li>8. To monitor the needs of the general membership regarding welfare, health,unemployment, death or sickness and fraternity-related incarceration and recommend to the different structures of the Fraternity solutions to such problems</li>
                            <li>9. To formulate guidelines for recognition and suspension of chapters and councils.</li>
                            <li>10. To formulate and to implement programs and policies aimed at providing free consultation and legal aid to all members in good standing.</li>
                            <li>11. To review, to render his decision, and to submit in writing recommendations on government laws, bills, acts and ordinances which may have adverse repercussionson the Fraternity</li>
                            <li>12. To represent the National Council and/or any of its members in civil, criminal and special proceedings.</li>
                            <li>13. To investigate or cause to be investigated any national or local official (electedor appointed) for violations of the Tenets and Codes of Conduct of the Fraternity; administrative neglect; graft and funds malversation and recommend appropriate action to the Premier</li>
                            <li>14. To investigate or cause to be investigated any of the Fraternity's subsidiary organizations for failure to comply with the terms and conditions stipulated in thegrant of such franchise or privilege and recommend appropriate action to the National Executive Council</li>
                            <li>15. To protect all members from human rights violations and prosecute anyviolation thereof.</li>
                            <li>16. To exercise such other powers and performs other duties and functions, which may be assigned by the Premier.</li>
                        </ul>

                        <p class="my-2 font-bold">
                            The Secretary for the <span class="text-yellow-500">INTERIOR</span> shall have the following functions and responsibilities:
                        </p>
                        <ul>
                            <li>1. To formulate and implement a comprehensive security plan to ensure the confidentiality of Fraternity information and security for all its members.</li>
                            <li>2. To devise a national disaster preparedness program and form highly-trained quick reaction units from among the members all over the archipelago to augment other civic action groups in areas hard-hit by calamities and disasters.</li>
                            <li>3. To coordinate with government agencies and non-government organizations on projects and programs aimed at community development, agro-industrial thrusts,labor intensive income generating ventures and peace and order.</li>
                            <li>4. To act as the National Wielder of the Whip.</li>
                        </ul>

                        <p class="my-2 font-bold">
                            The Secretary for the <span class="text-yellow-500">SPECIAL PROJECTS</span> shall have the following functions and responsibilities:
                        </p>
                        <ul>
                            <li>1. To act as the head of the socio- economic, cultural and political development arm of the Fraternity.</li>
                            <li>2. To conduct human resources development training, seminars and workshops in order to strengthen the capabilities of Triskelion communities along the lines of organizational development and management, leadership formation, and career development.</li>
                            <li>3. To formulate and implement programs and policies aimed at enhancing self-propelling and self-reliant Triskelion organizations through optimum utilization of human and financial resources.</li>
                            <li>4. To assist the lower structures of the Fraternity in developing project proposalsfor community and school-based endeavors on aspects of health, education, environmental concerns and other social services that would redound to the positive public image of the Fraternity.</li>
                            <li>5. To undertake research and advocacy work to influence public and private policies, which are in effect beneficial to the furtherance to the Fraternity's programs and services.</li>
                            <li>6. To coordinate with the other National offices in the promotion of solidarity work with other fraternities in the conquest of lasting peace.</li>
                        </ul>
                        <p class="my-2 font-bold">
                            The Secretary for <span class="text-yellow-500">ALUMNI AFFAIRS</span> 
                        </p>
                        <ul>
                            <li>1. Formulate guidelines and coordinate the formation and strengthening of  Alumni Chapters.</li>
                            <li>2. To ensure that the programs and activities being undertaken by the various alumni chapters are in conformity with this Constitution and in line with the policies set by the National Executive Council.</li>
                        </ul>
                </div>
                
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group8" :open="$group === 'group8'" wire:key="group8">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group8')">
                    Article VII
                </div>
            </x-slot:heading>
            <x-slot:content>
                
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        National Judicial Council
                   </h3>

                        <span class="text-yellow-500">Section 1.</span> The Premier shall appoint from among the Council of Elders / MDG's members of the Judicial Council who shall serve for a term of four (4) years.<br> 
                        <span class="text-yellow-500">Section 2.</span> The National Judicial Council shall have the following duties and functions.<br>
                        <ul>
                            <li>1. To hear, litigate and decide on all cases pertaining to Constitutional matters against any Triskelion, Chapter, or Council.</li>
                            <li>2. To review all impeachment, recall and suspension proceedings and render the final decisions for or against any elected official of the Fraternity.</li>
                            <li>3. To act as the final authority on expulsion of erring members.</li>
                            <li>4. To automatically constitute itself into the Commission on Election in every national election.</li>
                        </ul> 
                </div>
              
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group9" :open="$group === 'group9'" wire:key="group9">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group9')">
                    Article VIII
                </div>
            </x-slot:heading>
            <x-slot:content>
                
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Council of Elders
                   </h3>

                        <span class="text-yellow-500">Section 1.</span> It shall act as the advisory arm of the National Council.<br> 
                        <span class="text-yellow-500">Section 2.</span> The Council of Elders shall be composed of all former Secretary-Generals of all recognized Regional Councils who are in good standing with the Fraternity.<br>
                        <span class="text-yellow-500">Section 3.</span> The Council of Elders shall elect among themselves such officers, as it may deem necessary.<br> 
                        
                </div>
              
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group10" :open="$group === 'group10'" wire:key="group10">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group10')">
                    Article IX
                </div>
            </x-slot:heading>
            <x-slot:content>
                
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Local Councils
                   </h3>

                        <span class="text-yellow-500">Section 1.</span> The territorial subdivisions of the Republic of the Philippines except the barangay shall be adopted by the Fraternity. As such, there shall be Regional, Provincial, City, and Municipal Council formations.<br> 
                        <span class="text-yellow-500">Section 2.</span> The territorial subdivisions of the Fraternity shall enjoy local autonomy.<br>
                        <span class="text-yellow-500">Section 3.</span> The National Assembly shall enact a Local Council Code which shall providefor a more responsive and accountable local council structure instituted through asystem of decentralization with effective mechanisms of recall, initiative, and consultations, allocate among the different council units their powers, responsibilities, and resources, and provide for the qualifications, election, appointment, and removal, term, powers, and functions, and duties of local officers and other matters relating to the Fraternity and operation of the local council units.<br> 
                        <span class="text-yellow-500">Section 4.</span> The National Premier shall exercise general supervision over local council units. Regional Councils with respect to component Provincial Councils, ProvincialCouncils with respect to component City and Municipal Councils, and City and Municipal Councils with respect to component local chapters shall ensure that theacts of their component units are within the scope of their prescribed powers and functions.<br>
                        <span class="text-yellow-500">Section 5.</span> Each local council unit shall have the power to create its own sources of revenues and levy dues, fees and other charges subject to such guidelines and limitations as the National Assembly may provide, consistent with the basic policy of local autonomy. Such dues, fees, and charges shall accrue exclusively to the local council units.<br>
                        <span class="text-yellow-500">Section 6.</span> The term of office of the elected local chapter officers, whether school-basedor community-based, and City and Municipal Councils shall be:<br>
                        <p>
                            School or Community Based Chapters - One (1) year; Municipal, City, Provincial and Regional Councils - Two (2) years. Provincial Council and Regional Council officers shall serve for two years and nosuch elected officer shall serve for more than two successive terms. Voluntary renunciation of office for any length of time shall not be considered as an interruptionin the continuity of his service for the full term for which he was elected.
                        </p>
                        <span class="text-yellow-500">Section 7.</span> No Regional, Provincial, City, Municipal or local chapter unit may be created, divided, merged, abolished, or its boundary substantially altered, except in accordance with the criteria established in the Local Council Code and subject to approval by the National Executive Council.<br>
                </div>
              
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group11" :open="$group === 'group11'" wire:key="group11">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group11')">
                    Article X
                </div>
            </x-slot:heading>
            <x-slot:content>
                
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Principle of Subsidiarity
                   </h3>

                        <span class="text-yellow-500">Section 1.</span> In conformity with the principle of subsidiarity, functions that may well be performed by a lower-level structure of the Fraternity shall not be vested in a higher-level structure of the Fraternity. Thus, functions that can be performed efficiently by aschool or community chapter shall not be vested in the City or Municipal Council.Those that can be rendered well by the City or Municipal Council shall not be vested in the Provincial Council. Those that can be performed by the Provincial Council shall not be vested in the Regional Council. Finally, functions that can be performed well by the Regional Council shall not be given to the National Council. Conflicts and doubts on jurisdiction between the National Council, Regional Council, and lower level structures of the Fraternity shall be decided expeditiously by the National Judicial Council en banc or in division depending on the seriousness of the controversy.<br> 
                        <span class="text-yellow-500">Section 2.</span> The sub-division and pattern of the organizational structure of the Regional Council, Provincial Council, City or Municipal Council, and the School-based and Community-based chapters are designed to be similar. However, all Chapters and Councils shall follow the Direct Line of Command. School-based and Community-based Chapters to Municipal or City Councils, to the Provincial Council to the Regional Council up to the National Council.<br>
                        <span class="text-yellow-500">Section 3.</span> No chapter or council shall be allowed to undertake programs or projects contrary to this Constitution or to national policies.<br> 
                        <span class="text-yellow-500">Section 4.</span> Officials of the Fraternity in various echelons shall be elected as follows:<br>
                        <ul>
                            <li>The school-Based and Community-Based Chapter officials shall be elected by its mass membership or body.</li>
                            <li>The Municipal or City Council officials shall be elected by members of the Municipal Assembly.</li>
                            <li>The Provincial Council officers shall be elected by the members of the Provincial Assembly.</li>
                            <li>The Regional Council Officials shall be elected by the members of the Regional Assembly.</li>
                            <li>The National Council officials shall be elected by the members of the National Assembly which shall be composed of all the Regional Secretary Generals and Provincial Governor General upon consultation with their respective Regional Assemblies.</li>
                            
                        </ul>
                </div>
              
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group12" :open="$group === 'group12'" wire:key="group12">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group12')">
                    Article XI
                </div>
            </x-slot:heading>
            <x-slot:content>
                
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Accountability of Officers
                   </h3>

                        <span class="text-yellow-500">Section 1.</span> All officers, whether elected or appointed, shall at all times be accountable to the general membership of the Tau Gamma Phi Fraternity and shall serve them with utmost honesty, responsibility, integrity, loyalty and efficiency.<br> 
                        <span class="text-yellow-500">Section 2.</span> The Premier, the Executive Vice-Premier, the Vice-Premiers and the members of the National Assembly may be removed from office on impeachment for and conviction of culpable violation of this Constitution and the Tenets and Codes of Conduct, graft and corruption and other high crimes or betrayal of Fraternal trust.<br>
                        <span class="text-yellow-500">Section 3.</span> The National Executive Secretary and the members of the National Secretariat may be removed from office by the Premier.<br> 
                        <span class="text-yellow-500">Section 4.</span> <br>
                        <ul>
                            <li>1. The National Assembly shall have the power to initiate all cases of impeachment.</li>
                            <li>2. A verified complaint for impeachment of any National Officer may be filed by any member of the National Assembly or any member of the Fraternity through the proper bodies.</li>
                            <li>3. The members of the National Assembly and the National Judicial Council shallbe on oath during the whole proceedings. No officer shall be convicted without the concurrence of three-fourths (¾) of the members of the National Assembly.</li>
                            <li>4. The Chairman of the National Judicial Council shall preside over the proceedings if the Premier is on trial. He shall vote only in case of deadlock.</li>
                            <li>5. The National Assembly shall promulgate its rules on impeachment to effectively carry out the purpose of this article.</li>
                        </ul>
                        
                </div>
              
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group13" :open="$group === 'group13'" wire:key="group13">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group13')">
                    Article XII
                </div>
            </x-slot:heading>
            <x-slot:content>
                
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        General Provsions
                   </h3>

                        <span class="text-yellow-500">Section 1.</span> The Fraternity shall inculcate patriotism and nationalism, international solidarity, foster love of humanity, respect human rights, strengthen, spiritual and ethnical values, develop moral character and personal discipline, and encourage critical and creative thinking among its members.<br> 
                        <span class="text-yellow-500">Section 2.</span> The Fraternity shall promote social justice including the commitment to create economic opportunities for its members based on the freedom of initiative andself-reliance.<br>
                        <span class="text-yellow-500">Section 3.</span> The Fraternity shall adopt an integrated and comprehensive approach geared towards the full development of its members in the fields of education, health,science, technology, arts, culture, and sports.<br> 
                        <span class="text-yellow-500">Section 4.</span> The National Council shall adopt a national security plan to be administered by the National Secretary for the Interior and implemented by his local counterparts in their jurisdictions.<br>
                        <span class="text-yellow-500">Section 5.</span> The Special Projects Committee shall be the social, economic, cultural and political development arm of the National Council. It shall be developed into a non-government organization (NGO) and shall henceforth be known as Fraternitas de Voluntas (Brotherhood of Freewill). It shall promote the viability and growth of Triskelion Cooperatives as units of social justice and economic development<br>
                        <span class="text-yellow-500">Section 6.</span> The National Council shall provide the policy environment for full responsibility of Triskelion capability and the emergence of communication structures suitable to the needs and aspirations of the Fraternity and the balanced flow of information into, out of, and across the country.<br>
                        <span class="text-yellow-500">Section 7.</span> The Fraternity shall take into account Regional and Provincial needs and conditions and shall encourage local planning in the development of policies and programs for the betterment of its members.<br>
                </div>
              
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group14" :open="$group === 'group14'" wire:key="group14">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group14')">
                    Article XIII
                </div>
            </x-slot:heading>
            <x-slot:content>
                
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Amendments or Revisions
                   </h3>

                        <span class="text-yellow-500">Section 1.</span> Any amendments to, or revision of this Constitution may be proposed by: The National Assembly, upon a vote of three-fourths (3/4) of all its members or A Constitutional Convention.<br> 
                        <span class="text-yellow-500">Section 2.</span> The National Assembly may by a vote of two-thirds (2/3) of all its members call a Constitutional Convention.<br>
                        <span class="text-yellow-500">Section 3.</span> Any amendment to or revision of this Constitution under Section 1 hereof shall be valid when ratified by a majority of the votes of all delegates in a Constitutional Convention.<br> 
                       
                </div>
              
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group15" :open="$group === 'group15'" wire:key="group15">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group15')">
                    Article XIV
                </div>
            </x-slot:heading>
            <x-slot:content>
                
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Transitory Provisions
                   </h3>

                        <span class="text-yellow-500">Section 1.</span> The First National Congress shall be held on October 3, 2000 and shall beheld every two (2) years thereafter, every second week of November.<br> 
                        <span class="text-yellow-500">Section 2.</span> All Interim Regional Structures shall continue to exercise its functions until October 2002 when regular Regional Conventions will be held under the auspices of the National Council.<br>
                        <span class="text-yellow-500">Section 3.</span> All Interim Provincial Councils shall continue to exercise its powers and functions until September 2002 when regular Provincial Elections will be held.<br> 
                        <span class="text-yellow-500">Section 4.</span> All school-based chapters, whether Seniors or Juniors, and all community-based chapters shall hold its annual elections every third week of June.<br> 
                        <span class="text-yellow-500">Section 5.</span> The City Councils and Municipal Councils shall have their regular elections on the month of July, and shall be witnessed by the Provincial Executive Council.<br> 
                        <span class="text-yellow-500">Section 6.</span> Provincial Councils shall have their regular elections on the month of August.<br> 
                        <span class="text-yellow-500">Section 7.</span> Regional Councils shall have their regular elections on the month of September.<br> 
                        <span class="text-yellow-500">Section 8.</span> The National Council shall hold their regular elections on the month of November and shall assume office immediately on the following year..<br> 
                        <span class="text-yellow-500">Section 9.</span> National Assembly shall determine the honoraria and other remunerational located for the Premier and that the utilization of this fund shall be subject to the approval of the National Assembly.<br> 
                       
                </div>
              
            </x-slot:content>
        </x-mary-collapse>

        <x-mary-collapse name="group16" :open="$group === 'group16'" wire:key="group16">
            <x-slot:heading>
                <div class="cursor-pointer text-yellow-500 " wire:click="toggle('group16')">
                    Article XV
                </div>
            </x-slot:heading>
            <x-slot:content>
                
                <div class="p-4 text-black">
                    <h3 Class="text-yellow-500 font-bold text-lg text-center mb-4">
                        Effectivity
                   </h3>

                        <span class="text-yellow-500">Section 1.</span> All existing INEC resolutions, implementing guidelines, letters of instrumentation, and other issuance's consistent with this Constitution shall remain operative until amended, repealed, or revoked.<br> 
                        <span class="text-yellow-500">Section 2.</span> This Constitution shall take effect immediately upon its ratification by a majority of the votes cast in a National Congress held for the purpose and shall supersede all previous Constitutions.<br>
                        <p>
                            Approved and adopted by the delegates of the First National Congress held fromOctober 2-3, 2000 at the La Vista Resort, Brgy. Pansol, Calamba Laguna.
                        </p>
                        
                       
                </div>
              
            </x-slot:content>
        </x-mary-collapse>
    </x-mary-accordion>
</div>

