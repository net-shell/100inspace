<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\Screen;
use App\Models\Page;

class SiteContentSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        // Purge existing ecords
        Screen::truncate();
        Page::truncate();
        Media::truncate();

        // Landing
        $this->addScreen('JOIN 100IN.SPACE', [
            'EMBRACING A NEW ERA IN THE NEAR-EARTH ECONOMY' => [
                'text' => "Mobility in space is needed, more than ever. Without this capability, satellites supporting life on Earth would be constantly exposed to cosmic threats.  If satellite communications were abruptly disrupted, you might not be able to use your phone anymore or be guided safely home when needed.
Life as we know today just wouldn’t be the same without satellites. And their widespread use for fast digitalization in many sectors could have not happened if it wasn’t for their driving force — their propulsion systems. These allow spacecraft to complete missions in the most effective way, changing their orbit or inclination for better optimization.
As the Near-Earth economy rapidly expanding and set to boom in the decade to come, ENPULSION is proud to be an enabler of this new wave of innovation.",
                'bg_video' => 'sceneTransition_001-HQ.mp4',
            ],
            'CELEBRATING 100 IN SPACE' => [
                'text' => "ENPULSION is celebrating 100 active thrusters in space. Join us here at 100in.space.
It is our celebration for achieving this important milestone — becoming the first smallsat electric propulsion systems provider to have 100 active thrusters orbiting the Earth!
But even more, it is a heartfelt tribute to the past 100 years of space history, a fresh look into exciting ongoing technology developments in the present, and a curiosity-filled peek into the next 100 years of space activity.
We look back into the past to better envision the future — to inspire the present with what has been and what lies ahead of us.",
                'bg_video' => 'sceneTransition_002-HQ.mp4',
            ],
        ]);

        // Past
        $this->addScreen('THE PAST', [
            'The Era of Visionaries and Pioneers — until the mid 1950s' => [
                'text' => "The history of electric space propulsion begins a few hundreds of kilometers from Moscow. Constantin Tsiolkovksy (1857-1835), a nearly deaf and self-taught schoolteacher inspired by Jules Verne’s stories of space travel, dreamed about interplanetary spaceflight. He is considered today as one of the three fathers of modern rocketry who laid the theoretical groundwork that became the basis for aerospace engineering. He is also one of the first scientists who ever mentioned electric propulsion in his early publications, in 1911, although he remained highly sceptical about its feasibility. In 1924, he even declared: “the force of electricity is unlimited and can, therefore, produce a powerful flux of ionized helium to serve a spaceship. However, we shall leave these dreams for a while and return to our prosaic explosives.” Electricity was poorly known at the time, and therefore electric propulsion was still considered a dream.
On the other side of the Pacific, Robert Goddard (1882-1945), one of Tsiolkovksky’s contemporaries, was working on both electricity and propulsion. Although he often is identified as another father of modern rocketry, no historical evidence has showed a direct connection between both visionaries. Being naturally drawn to the topic, Goddard mentioned electric propulsion in his notebook as early as 1906 and came up with the basic principles for the acceleration of electrons, which kept him busy for another decade. In 1917, he patented an important method for producing electrified jets of gas, the first documented electrostratic ion accelerator in history.  And yet, as the United States entered World War I, scientists focused their efforts on practical and well mastered chemical propulsion solutions that better fitted military needs at the time.
A few years later, Hermann Oberth (1894-1989) took the propulsion community by storm. In 1922, his doctoral research proposal on rocket science labelled as “utopian” was turned down by the University of Heidelberg. He was then invited to defend his thesis a year later at the University of Cluj in Romania and published a controversial book called The Rocket Into Planetary Space that he further developed and republished in 1929. This publication, describing all practical considerations associated with the design of an electricity-powered spacecraft, rapidly became an immense source of inspiration for a whole generation of upcoming rocket scientists and science fiction writers that brought spaceflight even closer to reality. But many fields still needed to be better understood for electric propulsion to eventually blossom.",
                'gallery' => ['past_photo_1-1.png', 'past_photo_1-2.png', 'past_photo_1-3.png'],
            ],
            'Turned Into Reality — from the 1940s to 1990' => [
                'text' => "Waiting for their moment of glory, electric propulsion concepts were left on dusty shelves for a long time as jury was still out on whether it even could become an effective solution for spacecraft. In the context of growing geopolitical tensions, the United States and the Soviet Union took two different technical research trajectories for electric propulsion: the Americans focused on gridded ion thrusters, or ion drives, while Soviets put an early emphasis on Hall effect thrusters. This can be explained by scientific breakthroughs in both countries at the same time.
In the United States, Ernst Stuhlinger (1913–2008), who was familiar with Oberth’s ideas, gave electric propulsion research a new impulse and became a leading figure in the field, proactively supported by Wernher von Braun (1912-1977) himself. He gathered all available research findings at the time and his efforts helped to turn electric propulsion science into a legitimate area of research, anchoring it into reality once and for all. In doing so, he shaped the American approach to electric propulsion at an early phase and his legacy can still be seen today. This newfound curiosity for electric solutions led to a handful of experiments such as SERT-1, the SNAPSHOT and ATS programmes that were conducted throughout the 1960s although they never led to the launch of an operational electricity-powered satellite.  Unresolved technical challenges such as contaminations and low lifetimes eroded the promising future of electric propulsion and nurtured skepticism on their practicality for another 30 years.
In the Soviet Union, scientists started working on electric propulsion at a very early stage. At the Soviet design bureau OKB-1 under the leadership of no other than Sergei Korolev (1907–1966), the heirs of Tsiolkovsky focused on the development of Hall effect thrusters, catalyzed by the growing mastery of plasma physics. Cutting edge research was conducted from the 1960s onwards as well, from research lab to research lab, leading to the creation of FDB Fakel, now Fakel Industries which is still producing hall thrusters today.
Not only the United States and the Soviet Union pursued these ambitions: Japan, Germany and France carried out similar research to find the ideal thruster and turn in-orbit mobility into reality.",
                'gallery' => ['past_photo_2-1.png', 'past_photo_2-2.png', 'past_photo_2-3.png'],
            ],
            'The Rise of the Electric Age — from the 1990s to 2022' => [
                'text' => "The history of electric propulsion (EP) definitely changed its course after the collapse of the Soviet Union. The licensing of Soviet proven Stationary Plasma Thruster (SPT) technology led to the diffusion of electric propulsion to Europe and the United States, creating subclasses of EP across the world. In 1991, Kaliningrad and Moscow, American propulsion scientists came to test SPT in Kaliningrad, where Fakel sits, and Moscow and their findings confirmed that STP performances were promising for the commercial industry. First considered mostly for stationkeeping, these Soviet thrusters were progressively used for other applications such as orbit raising.
The new millennium also was a turning point for space exploration as many advanced concepts were demonstrated during this period, debunking the myths about electric propulsion.
The Deep Space 1 mission in 1998, was a technology demonstrator designed for interplanetary travel that produced NASA’s first close-up pictures of a comet nucleus. It is one of the key missions that contributed to this shift of perception as electric propulsion proved to be a strong contender for missions requiring a high degree of maneuvarability. This proven technology supported the Dawn mission launched in 2009, the first NASA exploratory mission to use ion propulsion for the study of two protoplanets in the asteroid belt: Vesta and Ceres. The mission was terminated only in 2018 and the spacecraft was left orbiting around Ceres.
In Europe, the quest for capable thrusters gained momentum with the SMART-1 mission launched in 2003. Four years after Deep Space-1 and six years before the Dawn mission, the European Space Agency launched its first lunar probe, SMART-1, who studied the chemical composition of the soil and tested critical capabilities for navigation and control maneuvers along the way. It reached operational lunar orbit in 2005 before crashing into the Moon a year later at a speed of 2 kilometers per second, creating a huge cloud of dust that could be seen from Earth. The same year, the Japanese Hayabusa spacecraft, also powered by ion engines, landed on the 25143 Itokawa asteroid, and returned samples to Earth in 2010.
This period of impressive technological innovation was a paradigm shift for the industry. Electric propulsion repeatedly demonstrated its potential for demanding missions, building trust in their reliability and performances. After decades of being considered impractical and unreliable, electric propulsion supported some of the most innovative missions in deep space exploration and marked the birth of the electric age for spacecraft. The commercial availability of some of the most advanced EP thrusters coming from the Soviet Union combined with successful technology demonstrations favourized their adoption on the commercial telecom market. Operators recognized their value for high-precision maneuvers and set at the same time a new standard for years to come. Between 2000 and 2010, the number of electricity powered satellites more than doubled, and the commercialization of EP thrusters started gaining momentum ever since.",
                'gallery' => ['past_photo_3-1.png', 'past_photo_3-2.png', 'past_photo_3-3.png'],
            ],
        ], false, 'emptySpace.png');

        // Present
        $this->addScreen('THE PRESENT', [
            'SPACE MOBILITY' => [
                'text' => "Mobility. It sounds like a piece of cake, yet it is one of the biggest technical challenges to overcome in a harsh environment like outer space.
Like all things in this Universe, spacecraft are exposed to cosmic hazards, such as solar storms, man-made or natural space objects.
One of our biggest problems for the continuation of space activities today is concentrated in one specific orbit called the Low Earth Orbit (LEO). It is a particularly advantageous vantage point to observe our planet given its proximity, yet satellites at this altitude need more robust propulsion systems to escape atmospheric drag, which is a natural process by which satellites reenter the atmosphere and desintegrate thanks to celestial mechanics.
The ability to move in orbit is not only critical to maintaining spacecraft at the right attitude – we call this attitude control, it also allows them to stay away from space debris, some of which are orbiting our Planet at speeds 15 times faster as than a bullet.
As in a vintage video game, spacecraft must avoid collision with space junk at all costs to prevent damage. But as more and more satellites are being launched into orbit at an unprecedented rate to build new services and infrastructures, space traffic is becoming increasingly complex.
In this precarious situation, it became clear that propulsion systems are not only critical to protecting spacecraft from harm during their lifetime, but they are also an absolute necessity to protect the space environment from being plagued by uncontrolled orbiting chunks of metal and chemicals. We need thrusters for the advancement of Space Sustainability and to carry on exploring the Universe safely.",
                'bg_video' => 'sceneTransition_003-HQ.mp4',
            ],
            'SPACE INFRASTRUCTURE' => [
                'text' => "One can argue that the history of humankind is also the history of infrastructure.  May it be a bivuac, an outpost, a road, an island, a harbor, an airport, a spaceport, a space station or a moonbase, explorers and pioneers need shelters, wherever they intend to go. In its broader sense, infrastructure also means all supporting constructions and systems underpinning human expansion.
And yet what is understood by space infrastructure is a relatively new concept. Dreamers already envisioned a future in space centuries ago, yet our understanding of the cosmos and what we can achieve is being challenged constantly.
We are lucky enough to live in the century that will witness the construction of new space stations, Earth-Moon highways, lunar communications, all of which supporting intergalactic probes, asteroid mining, interplanetary missions searching for life elsewhere, and human settlements.  Today, these ideas are turning into reality.
This infrastructure of a new kind, enabling human operations in this sci-fi like future, will be powered by thrusters. They are the pillars that can free spacecraft from the risk of drifting away because of the fundamental laws of physics and support the construction of complex spaceships, comparable in some ways to the International Space Station.",
                'bg_video' => 'sceneTransition_004-HQ.mp4',
            ],
            'SPACE MISSIONS' => [
                'text' => "Finding a path in the unknown.
There is nothing quite as challenging and humbling for the human mind than picturing the Universe, let alone the Multiverse. Space science has brought some of the most astonishing discoveries about our world and our understanding of time and space and will continue to do so in the next century. Space missions are the milestones of this scientific progress. They pave the way forward for the expansion of our knowledge. Powered by thrusters and advanced computing, space missions make the cosmos more palpable.
But one could argue that Earth-bound science has the priority, that we should act against climate change instead of sending rovers to Mars. Why look up to the sky and invest in interplanetary missions when the one and only planet we have is ailing?
Leaving aside all vital applications derived from space missions such as artificial limbs, insulin pumps, CAT scans, ice resistant airplanes, there is also a myriad of other reasons why we should invest in space. Let´s take Astronomy as one among many examples. Astronomy, the study of other worlds, helps us fathom our own planetary history, looking for archaeological evidence on extra-terrestrial grounds to understand what happened when Earth came to existence. Looking up above the clouds is also a matter of existential survival. What sounds a bit extreme at first is in the end easy to grasp: meteoroids are entering our atmosphere every day, our solar system has hundreds of black holes of which we know little, the centre of our galaxy happens to be one of them, our Sun will wipe us out eventually. All these cosmic realities seem to be far from everyone´s daily business and yet, this gives humanity a unique opportunity to rise above itself and to focus on global collective thinking, on a higher level of civilized planning, a long-term vision safeguarding our heritage “in the vastness of space and the immensity of time”, as Carl Sagan would say. It surely is not an easy feat, yet we must persevere before it is too late.",
                'bg_video' => 'sceneTransition_005-HQ.mp4',
            ],
            'SPACE SUSTAINABILITY' => [
                'text' => "A beginning, an apogee and an end. A life cycle to everything on this planet and, most likely, beyond it. So it is with everything ever created by man, everything we ever sent to the proximate outer space, every object already roaming around our planet.
Going by the name of space debris and very often - flying at speeds of up to 7 km/s, these objects can be harmful to say the least. But since space sustainability is a priority for everyone who is looking to benefit from space infrastructure, the necessary micro-adjustments for effectively avoiding collisions become an even bigger priority.
In a future where our proximate outer space loses more and more of its “free” space to space infrastructure that serves our needs down here from up there, the efficiency, reliability and safety of our ion thrusters would become more and more sought for.",
                'bg_video' => 'sceneTransition_006-HQ.mp4',
            ],
            'SPACE INNOVATION' => [
                'text' => "Space ambitions are growing, interplanetary travel has never been so attractive to investors, and it is expected that our scope of activity in zero-gravity will increase from the lowest orbits to the most distant celestial objects. For these reasons, many space enthusiasts are anticipating another period of sweeping innovation bringing another swath of ground-breaking technologies.
Rocketry is reaching a peak of maturity, reusability and fuels with increased performance changed the rules of the game. As a result, launch opportunities increased, facilitating access to space for many ambitious entrepreneurs. A growing number of companies aim at developing business models for asteroid mining, micro-gravity experiments, lunar infrastructure or in-orbit servicing, assembling and manufacturing (ISAM). All these applications could have tremendous catalyzing effects on space commercialization.
It is commonly accepted that industrial revolution brought profound change for human society. Yet, it would be foolish to ignore some of the harmful effects it also wrought on some aspects of that society, as if technological progress justified everything. The same logic should be applied to this revolution in space. This concern is often raised when discussing the path of space innovation. As NewSpace and Heritage Space are merging, the real question is whether we will be able to bring Space Sustainability to an acceptable level to preserve orbital and extra-terrestrial resources along the way. Thinking of orbits or planets in environmental terms is not as common and this mindset faces a lot of resistance, yet it is becoming critical to revaluate our “footprint” when it comes to space activities. This is the emerging reality of Space Sustainability.",
                'bg_video' => 'sceneTransition_007-HQ.mp4',
            ],
        ]);

        // Future
        $this->addScreen('THE FUTURE', [
            'MEET THE FUTURE' => [
                'text' => "Today's innovations show us what the future will look like. Investor interest in interplanetary travel has never been greater, and our radius of action in the zero-gravity environment is expected to expand from the most distant celestial objects to the lowest orbits. For these reasons, many space enthusiasts anticipate another period of extensive innovation that will usher in a new wave of breakthrough technologies for the benefit of humanity.
All these new applications have the potential to significantly accelerate the commercialization of spaceflight. However, they would not be possible without the use of flight-proven electric propulsions. These thrusters are a real game changer as the near-Earth economy enters a new era. They are the foundation for the ongoing fourth industrial revolution in the space economy and are accelerating our path to the future.",
                'bg_video' => 'Future_sceneTransition_001.mp4',
            ],
            'MEET ANNA' => [
                'text' => "When she first meets Alexander, the creator and CEO of ENPULSION, in the Vienna Technical Museum in 2022, Anna is a pioneering 12-year-old. She begins by asking him about the fancy tiny thruster that was on show there as well as space flight in general, and she quickly becomes thrilled about the subject. This enthusiasm fuels her steadfast determination to become an astronaut and won't fade in the years to come. Anna is the future, and you may watch her succeed through her greatest milestones as she realizes her goals and transforms into who she is. Help Anna find her destiny while learning about a possible vision for our own future.",
                'video' => 'https://www.youtube.com/embed/Yu5vIDZKL58',
                'bg_video' => 'Future_sceneTransition_002.mp4',
            ],
            'MOON ROCKS!' => [
                'text' => "<b>2023</b>  While the Lunar Net is being developed and the lunar constellations for a sort of \"Internet of the Moon\" are being gradually constructed, 13-year-old Anna, with much enthusiasm, undertakes a somewhat ambitious school project on the subject of \"lunar satellites\", something she and her classmates are working on for days and weeks. She still dreams constantly of being an astronaut on the moon accompanied by her dog, of course.
<b>2024</b>  Lunar Gateway, a small but crucial space station in the Moon's orbit, has already been constructed by late 2024, when Anna just turns 14 years old. Lunar Gateway will be essential to spectacular space expeditions, ground-breaking scientific research, and the flourishing near-Earth economy. Anna is inspired to explore all books available of space travel, futurology, visioneering, and physics. Clearly, Anna is full of questions about everything space-related and does not stop asking until she is properly informed…",
                'bg_video' => 'Future_sceneTransition_003.mp4',
            ],
            'MARS MISSION' => [
                'text' => "<b>2026</b>  Anna, who is now 16 years old, is even more excited about space-related topics as a result of the ongoing Mission to Mars. To complete her internship, she spends her summer vacation volunteering in the ENPULSION production facilities in Austria. There, she meets Alexander again, who is now able to thoroughly respond to all of her questions. She is given opportunities to participate in significant product development experiments during the internship and is challenged in accordance with her talent. Anna naturally wants to know everything and to be able to accomplish it right away.
<b>2028</b>  The prospect of maybe even walking on an asteroid with her own feet one day excites 18-year-old Anna and makes her even more determined to take the right courses at university to ensure that a landing with a human crew is not only possible — but that she can be there herself. But what exactly should she study to have a real chance of becoming an astronaut in the future...?",
                'bg_video' => 'Future_sceneTransition_004.mp4',
            ],
            'ASTEROID LANDING AND OTHER MOONS' => [
                'text' => "<b>2029</b>  The Axiom space station is in the process of replacing the ISS. Anna is just 19 years old when she begins her studies. The construction of the Artemis moon base - and with it the beginning of human settlement in space - accompanies Anna throughout her studies. Anna is interested in this field of human settlement and social life forms in space, for mass-array ion thrusters and advanced electric propulsion systems, but also for entanglement exchange in quantum repeaters for quantum communication over very long distances. She wonders which one to choose.
<b>2037</b>  Anna, who is now 27 years old, completes her astronaut training precisely at the same time that the first trip departs for Alpha Centauri. She then works as a capcom to assist the more seasoned astronauts on international missions to Lunar Base. Anna could need all the assistance she can get.
<b>2044</b>  The first astronaut to land on an asteroid with her crew, Anna (34) uses electric propulsion to push a portion of the asteroid toward Lunar Base, where it is utilized to gather fuel and regolith for the critical 3D printing procedures needed to develop Lunar Base Camp. The first emergence of a hype surrounding their extraction results from the more thorough analysis of the asteroid's primary ingredients...",
                'bg_video' => 'Future_sceneTransition_005.mp4',
            ],
            'HER FUTURE UNVEILS' => [
                'text' => "<b>2047</b>  The Clean Sky Project uses the agility, precision and endurance of a host of intelligently controlled Ion Thrusters to avoid the real threat of the Kessler Effect in low-Earth orbit by removing targeted space debris. Involved in the initiative is Anna, who is now 37 years old, and she has become an expert in these technologies. But with this assignment, she is once again faced with a tremendous challenge.
                <b>2054</b>  Since the discoveries in 2044–2045 concerning the precious materials contained in asteroids as well as the realized potential to mine them, a movement centered on asteroid mining has exploded. This impulse quickly led to the final democratization of the space industry, which was already highly differentiated due to the complex convergence of interests among business enterprises, states, the free academy, and NGOs. Suddenly, every private person wanted to participate in mining, and the approaching asteroid Klondike in the years 2051/52 caused all hopes to grow to excess. Anna (age 44) develops into an idealistic spokesman for the responsible use of little bodies and promotes a socially and environmentally responsible lifestyle. Again, Anna could use all the assistance she can get…",
                'bg_video' => 'Future_sceneTransition_006.mp4',
            ],
        ], false, 'emptySpace.png');

        // HIDDEN SCREENS

        $this->addScreen('Imprint', [
            'IMPRINT' => '<div class="grid w-full grid-cols-2 items-top justify-items-stretch"><div>
<b>COMPANY</b>
ENPULSION GmbH
Trade and services in the space sector
<b>ADDRESS</b>
Viktor Kaplan-Strasse 2
2700 Wiener Neustadt
<b>CONTACT</b>
Please send us an e-mail using our <a href="https://www.enpulsion.com/contact/">contact form</a>
</div><div>
<b>INFORMATION ACCORDING TO E-COMMERCE LAW</b>
Authority acc. ECG (E-Commerce Law): District Commission Wiener Neustadt (City) Chamber membership: Member of the Lower Austrian Chamber of Commerce
Specialized groups: LG Machine and Technology Trade – Trade with technical and industrial needs. LI mechatronics engineer – mechatronics engineer for electrical engineering and automation
Responsible for the content: Alexander Reissner Commercial
register number: FN 448479 d
Landesgericht Wiener Neustadt
</div></div>

<b>PAYMENT INFORMATION</b>
UID: ATU 70772434
Bank details
Receiver: ENPULSION GmbH
IBAN: AT92 2011 1837 1953 8000
BIC: GIBAATWWXXX

<b>GENERAL BUSINESS CONDITIONS</b>
U.S. customers please refer to our <a href="https://www.100in.space/terms-of-service-usa/">General Terms and Conditions and Terms of Use ENPULSION Inc</a>.
Customers from the rest of the world please refer to our <a href="https://www.100in.space/terms-of-service/">General Terms and Condition and Terms of Use ENPULSION GmbH</a>

<b>PRIVACY POLICY</b>
<a href="https://www.100in.space/privacy-policy/">Link to our Privacy Policy</a>

<b>GOOGLE ANALYTICS</b>
„Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. („Google“). Google Analytics verwendet sog. „Cookies“, Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website (einschließlich Ihrer IP-Adresse) wird an einen Server von Google in den USA übertragen und dort gespeichert. Google wird diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten für die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte übertragen, sofern dies gesetzlich vorgeschrieben oder soweit Dritte diese Daten im Auftrag von Google verarbeiten. Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten von Google in Verbindung bringen. Sie können die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich nutzen können. Durch die Nutzung dieser Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden.“
Nähere Informationen zu Nutzungsbedingungen und Datenschutz finden Sie unter http://www.google.com/analytics/terms/de.html bzw. unter http://www.google.com/intl/de/analytics/privacyoverview.html. Wir weisen Sie darauf hin, dass auf dieser Webseite Google Analytics um den Code „gat._anonymizeIp();“ erweitert wurde, um eine anonymisierte Erfassung von IP-Adressen (sog. IP-Masking) zu gewährleisten.

<b>VERWEISE UND LINKS</b>
Unser Angebot kann auch Links und Verweise zu Internangeboten Dritter enthalten. Wir möchten Sie darauf hinweisen, dass wir keinen Einfluss auf deren Inhalte haben und demnach auch keine Gewähr dafür übernehmen können. Allein der Drittanbieter ist für seine Internetseiten verantwortlich. Wir haben jedoch zum Zeitpunkt der Verlinkung bzw. des Verweises die Internetseiten Dritter auf mögliche offensichtliche Rechtsverstöße geprüft und keine solche feststellen können. Da eine laufende Überprüfung verlinkter Internetseiten nicht möglich und auch nicht zumutbar ist, können wir lediglich bei konkreten Anhaltspunkten reagieren. Sobald uns ein Rechtsverstoß bekannt wird, werden wir derartige Links bzw. Verweise umgehend entfernen.

<b>INHALT DES ONLINEANGEBOTES</b>
Wir übernehmen keinerlei Gewähr für die Aktualität, Korrektheit, Vollständigkeit oder Qualität der bereitgestellten Informationen. Haftungsansprüche gegen uns, welche sich auf Schäden materieller oder ideeller Art beziehen, die durch die Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch die Nutzung fehlerhafter und unvollständiger Informationen verursacht wurden, sind grundsätzlich ausgeschlossen, sofern seitens Weboo kein nachweislich vorsätzliches oder grob fahrlässiges Verschulden vorliegt. Alle Angebote sind freibleibend und unverbindlich. Wir behalten es sich ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.

<b>URHEBER - UND KENNZEICHENRECHT</b>
Wir sind bestrebt, in allen Publikationen die Urheberrechte der verwendeten Grafiken, Tondokumente, Videosequenzen und Texte zu beachten, von uns selbst erstellte Grafiken, Tondokumente, Videosequenzen und Texte zu nutzen oder auf lizenzfreie Grafiken, Tondokumente, Videosequenzen und Texte zurückzugreifen. Alle innerhalb des Internetangebotes genannten und ggf. durch Dritte geschützten Marken- und Warenzeichen unterliegen uneingeschränkt den Bestimmungen des jeweils gültigen Kennzeichenrechts und den Besitzrechten der jeweiligen eingetragenen Eigentümer. Allein aufgrund der bloßen Nennung ist nicht der Schluss zu ziehen, dass Markenzeichen nicht durch Rechte Dritter geschützt sind! Das Copyright für veröffentlichte, von uns selbst erstellte Objekte bleiben allein auf dieser Seiten. Eine Vervielfältigung oder Verwendung solcher Grafiken, Tondokumente, Videosequenzen und Texte in anderen elektronischen oder gedruckten Publikationen ist ohne ausdrückliche Zustimmung von uns nicht gestattet.',
        ], true);

        $this->addScreen('Privacy Policy', [
            'Privacy Policy' => 'Allgemeines
Wir, ENPULSION GmbH (wir oder ENPULSION), verarbeiten personenbezogene Daten nur unter Einhaltung der einschlägigen Datenschutzbestimmungen, insbesondere der Datenschutzgrundverordnung (DSGVO).
Diese Datenschutzerklärung gilt für Sie als Person (einschließlich Ihrer Mitarbeiter, Berater, Vertragspartner und anderen Personen auf Ihrer Seite), die unser Onlineangebot (unsere Webseite mit den darin verbundenen Websites, Funktionen und Inhalte; Onlineangebot), nutzt oder mit uns in ein Vertragsverhältnis tritt oder ein solches anbahnen möchte, (Sie).
Diese Datenschutzerklärung klärt Sie über die Art, den Umfang und Zweck der Verarbeitung von personenbezogenen Daten innerhalb unseres Onlineangebotes und im Zuge des Abschlusses und der Erfüllung von Verträgen außerhalb des Onlineangebots auf.
Um die Einhaltung der Datenschutzvorschriften sicherzustellen, treffen wir organisatorische, rechtliche und technische Sicherheitsmaßnahmen entsprechend dem Stand der Technik (z.B. verschlüsselte Übertragung von Daten zwischen dem Browser der Nutzer und unserem Server). Dies gilt natürlich auch, wenn wir bei der Bereitstellung unserer Leistungen Subunternehmer einsetzen.
Insbesondere erteilen Sie als Vertragspartner von ENPULSION Ihre Zustimmung zur Verarbeitung Ihrer personenbezogenen Daten, die im Zusammenhang mit dem Abschluss und der Erfüllung der Verträge zwischen Ihnen und ENPULSION stehen.

Grundsätzliche Angaben zur Datenverarbeitung und Rechtsgrundlagen
Die in dieser Datenschutzerklärung verwendeten datenschutzrechtlichen Begriffe (z.B. „personenbezogene Daten“ oder „Verarbeitung“) entsprechen den Definitionen des Art. 4 DSGVO.
Zu Ihren verarbeiteten personenbezogenen Daten gehören, soweit bekanntgegeben oder im Zuge Ihrer Nutzung des Onlineangebots erhoben: Name, Adresse und Kontaktdaten (Telefonnummer, E-Mail-Adresse), die in Anspruch genommenen Leistungen, Namen von Sachbearbeitern, Zahlungsinformationen, Daten zu den besuchten Webseiten unseres Onlineangebotes, Eingaben im Kontakt- oder Online-Bestellformular.
Die Datenverarbeitung erfolgt aufgrund einer oder mehrerer der folgenden Rechtsgrundlagen:
Zustimmung zur Datenverarbeitung (Art. 6 Abs. 1 lit a DSGVO);
Notwendigkeit zur Erfüllung eines Vertrags zwischen Ihnen und uns (Art. 6 Abs. 1 lit b DSGVO);
Notwendigkeit zur Erfüllung unserer gesetzlichen Verpflichtung (Art. 6 Abs. 1 lit c DSGVO);
Notwendigkeit zur Wahrung unserer berechtigten Interessen oder eines Dritten (z.B.: Verhinderung von Datenmissbrauch, Durchsetzung von Rechtsansprüchen).
Die von uns verarbeiteten Daten werden gelöscht, sobald sie für den Verarbeitungszweck nicht mehr erforderlich sind, der Löschung keine gesetzlichen Aufbewahrungspflichten entgegenstehen und die Daten für die Geltendmachung allfälliger Rechtsansprüche innerhalb der gesetzlichen Verjährungsfrist nicht mehr benötigt werden. Sofern Ihre nicht gelöscht werden, weil sie für andere und gesetzlich zulässige Zwecke erforderlich sind, wird deren Verarbeitung eingeschränkt. Bewerberdaten werden nach 12 Monaten wieder gelöscht.

Weitergabe von Daten an Dritte und Drittanbieter
Sofern Inhalte, Werkzeuge oder sonstige Mittel von anderen Anbietern (Drittanbieter) eingesetzt werden und deren Sitz sich in einem Drittland befindet, ist davon auszugehen, dass ein Datentransfer in die Sitzstaaten der Drittanbieter stattfindet. Drittstaaten sind grundsätzlich Länder, die keine EU/EWR-Mitgliedsstaaten sind.
Sie nehmen zur Kenntnis und stimmen zu, dass wir persönlichen Daten an folgende Dritte übermitteln:
ENPULSION Inc, 55 River Oaks Pl #702, San Jose, CA 95134, USA
Google, Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA (Google);
Facebook Inc., 1 Hacker Way, Menlo Park, CA 94025, USA, bzw. falls Sie in der EU ansässig sind: Facebook Ireland Ltd., 4 Grand Canal Square, Grand Canal Harbour, Dublin 2, Irland betrieben wird (Facebook);
Google Tag Manager, https://www.google.com/intl/de/tagmanager/use-policy.html
Zoho Corp, 4141 Hacienda Drive, Pleasanton, CA 94588, USA

Nutzung des Onlineangebots
Soll durch die Nutzung unseres Onlineangebots ein Vertrag zwischen Ihnen und uns erfüllt werden oder soll durch die Nutzung ein Vertrag angebahnt werden, ist die Verarbeitung von Bestandsdaten und Vertragsdaten, sowie von Daten wie IP-Adresse und Zeitpunkt Ihrer Nutzerhandlungen aufgrund Art 6 Abs. 1 lit b DSGVO gerechtfertigt.
Eine Weitergabe dieser Daten an Dritte erfolgt grundsätzlich nicht, außer Sie haben in die Weitergabe eingewilligt oder es besteht hierzu besteht eine gesetzliche Ermächtigung oder Verpflichtung (siehe oben Punkt 2.3).

Kontaktaufnahme
Bei der Kontaktaufnahme mit uns werden die Ihre eingegeben bzw. die an uns dabei übermittelten Daten zur Bearbeitung der Kontaktanfrage und deren Abwicklung verarbeitet.
Kontaktanfragen, die nicht zum Abschluss eines Vertrages führen, werden spätestens nach 12 Monaten wieder gelöscht.

von Zugriffsdaten und Logfiles
Wir erheben und speichern aufgrund unserer berechtigten Interessen, z.B. zur Verhinderung und Aufklärung von Missbrauchs- oder Betrugshandlungen) Daten über jeden Zugriff auf den Server, auf dem sich unser Onlineangebot befindet (sogenannte Serverlogfiles). Zu den Zugriffsdaten gehören Name der abgerufenen Website, Datei, Datum und Uhrzeit des Abrufs, übertragene Datenmenge, Meldung über erfolgreichen Abruf, Browsertyp nebst Version, das Betriebssystem, Referrer URL (die zuvor besuchte Seite), IP-Adresse und der anfragende Provider.
Wir speichern diese Daten aus Sicherheitsgründen für die Dauer von maximal 30 Tagen und löschen sie danach. Daten, deren weitere Aufbewahrung zu Beweiszwecken erforderlich sind, sind bis zur endgültigen Klärung des jeweiligen Vorfalls von der Löschung ausgenommen.

Cookies
Cookies sind Informationen, die von unserem Webserver oder von Webservern Dritter an Ihren Web-Browser übertragen und dort für einen späteren Abruf gespeichert werden.
Wir verwenden sogenannte „Session-Cookies“. Diese sind zur Erbringung unserer Dienste unbedingt notwendig (z.B. um Ihren Login-Status zu speichern oder die Warenkorbfunktion ermöglichen zu können) und bedürfen daher keiner Zustimmung. Sie werden nur für die Zeitdauer Ihres aktuellen Besuchs auf unserer Webseite verwendet und daher gelöscht, wenn Sie z.B. den Browser schließen.
Auf unserer Webseite kommen auch Cookies zur Reichweitenmessung und zu Werbezwecken, auch durch Drittanbieter, die auch auf Ihren Endgeräten gespeichert werden (siehe Punkt 9) zum Einsatz. Wenn Sie nicht möchten, dass Cookies auf Ihrem Gerät gespeichert werden, können Sie die entsprechende Option in den Systemeinstellungen ihres Browsers deaktivieren und bereits gespeicherte Cookies löschen. Der Ausschluss von Cookies kann aber zu Funktionseinschränkungen unseres Onlineangebotes führen.

Einbindung von Diensten und Inhalten Dritter
Aufgrund unserer berechtigten Interessen an der Analyse, Optimierung und wirtschaftlichem Betrieb unseres Onlineangebotes setzen wir Drittanbietern ein, um Inhalte und Services, wie z.B. Videos oder Schriftarten (Inhalte) auf unserer Website einzubinden. Die Drittanbieter dieser Inhalte verarbeiten dabei Ihre die IP-Adresse, da sie ohne diese die Inhalte nicht an Ihren Browser senden können. Die IP-Adresse ist damit für die Darstellung dieser Inhalte erforderlich. Dem Grundsatz der Datenminimierung entsprechend verwenden wir nach Möglichkeit nur solche Inhalte, deren Anbieter Ihre IP-Adresse lediglich zur Zurverfügungstellung ihrer Inhalte erfassen.
Zur Verfolgung unserer berechtigten Interessen können die von uns eingesetzten Drittanbieter auch Web Beacons zu statistischen und/oder Marketingzwecke verwenden. Web-Beacons sind pixelgroße Dateien, die von dem Server der Drittanbieter abgerufen werden (Web-Beacon). Durch die Web Beacons können Informationen, wie der Besucherverkehr dieser Website ausgewertet werden. Die pseudonymen Informationen können ferner in Cookies auf Ihrem Endgerät gespeichert werden und unter anderem technische Informationen zum Browser und Betriebssystem, verweisende Websites, Besuchszeit sowie weitere Angaben zur Nutzung unseres Onlineangebotes enthalten, als auch mit solchen Informationen aus anderen Quellen verbunden werden.
Wir setzen die Dienste folgender Drittanbieter im Zusammenhang mit dem Onlineangebot ein:
Wenn Sie die Zahlungsdienste von Drittanbietern (z.B. PayPal oder Sofortüberweisung) in Anspruch nehmen, gelten die Geschäftsbedingungen und die Datenschutzhinweise der jeweiligen Drittanbieter, welche auf deren jeweiligen Webseiten, Apps, etc. abrufbar sind.
Externe Schriftarten des Drittanbieters Google– sogenannte „Google Fonts“, Landkarten des Dienstes „Google Maps“ von Google, sowie Videos der Plattform „YouTube“ von Google. Die Einbindung erfolgt durch einen Serveraufruf bei Google (in der Regel in den USA).

Weitere Informationen zur Datennutzung durch Google, Einstellungs- und Widerspruchsmöglichkeiten erhalten Sie auf den folgenden Webseiten:
https://www.google.com/intl/de/policies/privacy/partners („Datennutzung durch Google bei Ihrer Nutzung von Websites oder Apps unserer Partner“),
http://www.google.com/policies/technologies/ads („Datennutzung zu Werbezwecken“),
https://www.google.de/settings/ads („Informationen verwalten, die Google verwendet, um Ihnen Werbung einzublenden“).

Google Analytics
Wir setzen auf Basis unserer berechtigten Interessen zur Auswertung der Nutzung unseres Onlineangebotes und zu dessen Optimierung Google Analytics, einen Webanalysedienst von Google ein. Die durch die Cookies von Google Analytics erzeugten Informationen werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert. Google ist unter dem Privacy-Shield-Abkommen zertifiziert.
Wir setzen Google Analytics nur mit aktivierter IP-Anonymisierung ein. Das bedeutet, dass Ihre IP-Adresse innerhalb von EU/EWR-Mitgliedstaaten gekürzt wird und die somit keine Rückschlüsse auf den Nutzer zulässt.
Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf Ihre Nutzung des Onlineangebotes bezogenen Daten an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem Sie das unter folgendem Link verfügbare Browser-Plugin herunterladen und installieren: http://tools.google.com/dlpage/gaoptout?hl=de.

Facebook Social Plugins
Wir nutzen auf Grundlage unserer berechtigten Interessen, z.B. zur Analyse, der Optimierung und des wirtschaftlichen Betriebs unseres Onlineangebotes Social Plugins (Plugins) des sozialen Netzwerkes facebook.com (Facebook). Facebook ist unter dem Privacy-Shield-Abkommen zertifiziert.
Wenn Sie eine Funktion unseres Onlineangebotes aufrufen, die ein solches Plugin enthält, baut sein Gerät durch einen Klick auf das Plugin eine direkte Verbindung mit den Servern von Facebook auf. Wir haben dabei keine Kenntnis von und Einfluss auf den Umfang der Daten, die Facebook mit Hilfe dieses Plugins erhebt. Sind Sie bei Facebook eingeloggt, kann Facebook den Besuch seinem Facebook-Konto zuordnen. Wenn Sie den Plugins interagieren, zum Beispiel den Like Button betätigen oder einen Kommentar abgeben, wird die entsprechende Information von Ihrem Gerät direkt an Facebook übermittelt und dort gespeichert. Falls Sie kein Mitglied von Facebook sind, besteht trotzdem die Möglichkeit, dass Facebook Ihre IP-Adresse in Erfahrung bringt und speichert.
Zweck und Umfang der Datenerhebung und die weitere Verarbeitung und Nutzung der Daten durch Facebook sowie die diesbezüglichen Rechte und Einstellungsmöglichkeiten zum Schutz Ihrer Privatsphäre können Sie diesen Datenschutzhinweisen von Facebook entnehmen: https://www.facebook.com/about/privacy/.
Wenn Sie Facebook-Mitglied ist und nicht möchten, dass Facebook über dieses Onlineangebot Daten über Sie sammelt und mit seinen bei Facebook gespeicherten Mitgliedsdaten verknüpft, müssen Sie sich vor der Nutzung unseres Onlineangebotes bei Facebook ausloggen und seine Cookies löschen. Weitere Einstellungen und Widersprüche zur Nutzung von Daten für Werbezwecke, sind innerhalb der Facebook-Profileinstellungen möglich: https://www.facebook.com/settings?tab=ads oder über die US-amerikanische Seite http://www.aboutads.info/choices/ oder die EU-Seite http://www.youronlinechoices.com/.

Facebook-Marketingdienste
Innerhalb unseres Onlineangebotes setzen wir aufgrund unserer berechtigten Interessen an Analyse, Optimierung und wirtschaftlichem Betrieb unseres Onlineangebotes das sog. “Facebook-Pixel” von Facebook ein. Damit kann Facebook die Besucher unseres Onlineangebotes als Zielgruppe für die Darstellung von Anzeigen (Facebook-Ads) identifizieren. Die durch uns geschalteten Facebook-Ads werden nur solchen Facebook-Nutzern anzuzeigen, die auch ein Interesse an unserem Onlineangebot gezeigt haben, sodass unsere Facebook-Ads Ihrem Interesse entsprechen.
Das Facebook-Pixel wird beim Aufruf unserer Website unmittelbar durch Facebook eingebunden und kann auf Ihrem Gerät ein Cookie abspeichern. Wenn Sie sich anschließend bei Facebook einloggen oder im eingeloggten Zustand Facebook besuchen, wird der Besuch unseres Onlineangebotes in Ihrem Facebook-Profil vermerkt. Die dabei über Sie erhobenen Daten sind für uns anonym, werden aber von Facebook gespeichert und verarbeitet, sodass eine Verbindung zum jeweiligen Nutzerprofil möglich ist und von Facebook sowie zu eigenen Marktforschungs- und Werbezwecken verwendet werden kann. Hierauf haben wir keinen Einfluss. Sofern wir Daten zu Abgleichzwecken an Facebook übermitteln sollten, werden diese lokal in auf dem Browser verschlüsselt und erst dann an Facebook über eine gesicherte https-Verbindung gesendet. Dies erfolgt alleine mit dem Zweck, einen Abgleich mit den gleichermaßen durch Facebook verschlüsselten Daten herzustellen.
Die Verarbeitung der Daten durch Facebook erfolgt im Rahmen der Datenrichtlinie von Facebook. Für nähere Informationen benutzen Sie bitte die folgenden Links:
Datenverwendungsrichtlinie von Facebook: https://www.facebook.com/policy.php;
Informationen zum Facebook-Pixel: https://www.facebook.com/business/help/651294705016616.
Zum Widerspruch zur Erfassung durch den Facebook-Pixel und Verwendung Ihrer Daten zur Darstellung von Facebook-Ads können Sie die folgende Webseite aufrufen und dort die
Hinweise zu den Einstellungen nutzungsbasierter Werbung befolgen: https://www.facebook.com/settings?tab=ads.

Kontaktdaten, Rechte der ENPULSION GmbH
Viktor Kaplan-Straße 2
2700 Wiener Neustadt
Email: office@enpulsion.com

Sie haben das Recht, auf Antrag an die angegebenen Kontaktdaten unentgeltlich Auskunft über die personenbezogenen Daten zu erhalten, die von uns verarbeitet werden. Dazu gehören die Zwecke der Datenverarbeitung, welche Datenkategorien verarbeitet werden, die Empfänger einer allfälligen Datenübermittlung und die geplante Speicherungsdauer der Daten.
Zusätzlich haben Sie das Recht auf Berichtigung unrichtiger Daten, Einschränkung der Verarbeitung und Löschung ihrer personenbezogenen Daten, sofern zutreffend, Ihr Recht auf Datenportabilität geltend zu machen und im Fall der Annahme einer unrechtmäßigen Datenverarbeitung, eine Beschwerde bei der zuständigen Aufsichtsbehörde einzureichen.
Ebenso können Sie jederzeit die Zustimmung zur Datenverarbeitung, grundsätzlich mit Auswirkung für die Zukunft, auf eigene Kosten postalisch, per E-Mail oder Fax abändern, widerrufen und der Datenverarbeitung widersprechen.
Wir weisen Sie aber darauf hin, dass die Verarbeitung personenbezogener Daten zur Erfüllung eines allfälligen Vertragsverhältnisses notwendig sein kann oder aufgrund anderer datenschutzrechtlicher Bestimmungen gerechtfertigt ist. In diesem Fall besteht kein Widerrufsrecht.
Sofern wir Ihre persönlichen Daten aufgrund unserer berechtigten Interessen verarbeiten, haben Sie das Recht, dieser Verarbeitung zu widersprechen. In diesem Fall dürfen wir Ihre persönlichen Daten nur dann weiterhin verarbeiten, wenn zwingende schutzwürdige Gründe für die Verarbeitung vorliegen.

Änderungen der Datenschutzerklärung
Wir behalten uns vor, die Datenschutzerklärung zu ändern, um sie an geänderte Rechtslagen, oder bei Änderungen des Dienstes sowie der Datenverarbeitung anzupassen. Dies gilt jedoch nur im Hinblick auf Erklärungen zur Datenverarbeitung. Sofern Ihre Einwilligung erforderlich ist oder Bestandteile der Datenschutzerklärung allfällige Regelungen des Vertragsverhältnisses enthalten, erfolgen die Änderungen nur mit Ihrer Zustimmung.
Sie werden gebeten, sich regelmäßig über den aktuellen Inhalt der Datenschutzerklärung zu informieren.',
        ], true);

        $this->addScreen('Terms of Service', [
            'GENERAL TERMS AND CONDITIONS AND TERMS OF USE - ENPULSION GmbH' => 'For the General Terms and Conditions of Use for U.S customers please refer to <a href="https://www.enpulsion.com/terms-of-service/">GTCs ENPULSION GmbH</a>.
1. General Terms and Conditions of Use
1.1. These General Terms and Conditions and Terms of Use (GTCs) shall govern all agreements between Enpulsion GmbH (FN 448479d), with an address at Viktor Kaplan-Straße 2 2700 Wiener Neustadt (ENPULSION), on the one hand, and the customer (Customer), on the other hand. The Customer and ENPULSION are each referred to herein as a Party.
1.2. Neither ENPULSION nor Customer is a Prohibited Person (as defined below) and the Agreement does not constitute a transaction as set out in this Section 1.2
As used in these GTCs, “Prohibited Person” means a natural person or legal entity with legal personality (Person),
i) subject to a prohibition (including economic, financial and/or travel prohibitions) or other restrictive measures or sanctions by any government or inter-governmental organization, including but not limited to, (a) the United Nations Security Council Sanctions Committee, (b) under the lists maintained by the European Union’s European External Action Service designed to implement the EU’s Common Foreign and Security Policy, and (c) the country of residence or organization of such Person.
ii) subject to the Foreign Corrupt Practices Act and economic sanctions and export controls administered by the S. Department of the Treasury and the U.S. Department of Commerce.
iii) that transacts or otherwise deals, directly or indirectly, with or is otherwise related to an Embargoed Jurisdiction or Sanctioned Person or that exports or reexports, directly or indirectly, in violation of any applicable US laws or regulations, or otherwise uses the Content for any prohibited purpose.
Content means any regulated data transmitted in connection with these GTCs.
Embargoed Jurisdiction means a country, region, territory or government with respect to which the U.S. government imposes a trade or investment embargo from time to time, which presently includes Crimea, Cuba, Iran, North Korea, and Syria.
Sanctioned Person means any Person with respect to which or whom U.S. citizens are generally forbidden to transact under economic sanctions including, without limitation, a person on the List of Specially Designated Nationals and Blocked Persons.
1.3. These GTCs shall govern the relationship of the Parties in all respects unless and only to the extent that the Parties expressly agree otherwise in Unless expressly specified therein in writing, these GTCs shall govern and are hereby incorporated by reference into any and all requests for quotations, acceptances, purchase orders or other agreements, correspondence or arrangements between the Parties (whether written or oral). In the event of any conflict between any of the foregoing and the terms and conditions of the GTCs, the terms and conditions of the GTCs shall control and prevail as between the Parties.
1.4. For avoidance of doubt, these GTCs supersede any and all prior, contemporaneous or future oral discussions, agreements, negotiations, arrangements or understandings between the Parties.
1.5. ENPULSION reserves the right, from time to time at its discretion and without notice to Customer, to update, amend or otherwise supplement these GTCs, and Customer shall be bound by and subject to the GTCs as they may from time to time be so updated, amended or supplemented. The GTCs, as so updated, amended or supplemented from time to time will be available for review by Customer on the homepage of ENPULSION at https://enpulsion.com/.
1.6. Customer shall at all times ensure and be responsible for the full compliance with and observance of these GTCs by Customer’s affiliates, officers, directors, employees, agents, contractors, consultants, vendors, invitees, and representatives.
2. Scope and Conclusion of the Agreement
2.1. ENPULSION’s display of its products and services (including any related pricing or other information) on its website, or in catalogs, brochures, or datasheets or in any quotation issued by ENPULSION to Customer, shall under no circumstances constitute a binding offer capable of being accepted by Customer to conclude an agreement for the purchase and sale of ENPULSION’s products and services, but rather, shall constitute only a non-binding invitation from ENPULSION to Customer to make an offer to ENPULSION (invitatio ad offerendum) for the purchase and sale of such products and services.
2.2. In response to a quotation issued by ENPULSION at Customer’s request, or otherwise as permitted on or through ENPULSION’s website or by ENPULSION’s personnel, Customer may submit a binding offer to purchase specified products and services of ENPULSION (Products) by submitting a written offer for the purchase of such Products to ENPULSION. For avoidance of doubt, an offer sent via email or facsimile shall constitute a “written offer” for purposes of these GTCs.
2.3. Once Customer has submitted a written offer, such written offer shall be binding upon Customer and shall be irrevocable by Customer for a period of four weeks after ENPULSION’s receipt of such offer. Following the expiration of such four-week period, such written offer shall remain binding upon Customer and shall remain subject to acceptance by ENPULSION for an unlimited period of time, unless and until ENPULSION receives from Customer an express written revocation thereof.
2.4. A binding agreement for the purchase and sale of the Products specified in Customer’s offer shall only be deemed to have been entered into by the Parties at such time, if any, as ENPULSION delivers to Customer an express written acceptance of Customer’s offer (which written acceptance may be delivered by email, facsimile, courier service, ordinary mail or otherwise) (Agreement).
2.5. Regardless of whether ENPULSION and Customer enter into an Agreement for the relevant Products, Customer shall be solely responsible for the fees and costs of any drawings, sketches, samples, calculations or simulations, and any other work or services performed by ENPULSION in connection with any offer by, or negotiations with Customer, to the extent any of the same are requested by Customer and/or deemed appropriate by ENPULSION. ENPULSION shall invoice Customer at ENPULSION’s standard rates for any such fees and costs, and any such fees and costs shall be due and payable by Customer to ENPULSION as otherwise specified under Section 5 promptly upon (but in no event later than 14 days after) Customer being invoiced by ENPULSION.
2.6. ENPULSION reserves the right in its sole discretion to decline (i) any offers for any reason of for no reason in its sole discretion and (ii) to deliver Products to any given address, region or jurisdiction.
3. Obligations of Customer
3.1. Customer guarantees that all information, regardless of its form, provided to ENPULSION by or on behalf of Customer:
a. is not false, inaccurate or misleading;
b. does not omit any material facts;
c. does not breach any rights of third parties, or agreements with such third parties, including any non-disclosure of confidentiality obligations to which Customer may be subject;
d. does not breach any laws, statutes, regulations or other applicable laws; and
e. does not contain any viruses or programs which cause damages, impede or which intercept information, data and personal information or use such data illegitimately.
3.2. Customer shall be responsible for the payment of any and all additional fees or costs in connection with any services requested by Customer, or any services which ENPULSION reasonably believes to be necessary in connection with its Agreement to provide Products to Customer, in each case, whether or not such services are expressly covered by the Agreement. ENPULSION shall invoice Customer at ENPULSION’s standard rates for any such fees and costs, and such fees and costs shall be due and payable by Customer to ENPULSION as otherwise specified under Section 5 promptly upon (and in no event more than 14 days following) Customer being invoiced by ENPULSION.
4. Prices and Availability
4.1. The pricing and other information set forth in ENPULSION’s price lists, advertisements, marketing and sales materials, catalogs, brochures and datasheets, and on ENPULSION’s website, is at all times subject to change. ENPULSION reserves the right to amend such pricing and other information at any time and without notice to Customer acknowledges and agrees that in relying on any information on ENPULSION’s website, it shall refer to the most current version thereof, and actively contact ENPULSION in case of any doubt or conflict with previously received information.
4.2. All prices for Products (and calculations in connection therewith) exclude VAT, if any, loading and unloading, shipping and handling, customs, insurance and taxes.
4.3. ENPULSION reserves the right at any time, including after entering into an Agreement with Customer, to refrain from fulfilling Customer’s order, in which case, ENPULSION shall inform Customer as soon as is practical after any such determination is made that the ordered Products are unavailable, and any amounts in respect of the purchase price for the Products, if already paid by Customer, shall be refunded.
5. Conditions of payment
5.1. ENPULSION only accepts payments via wire transfer.
5.2. Customer shall make all payments in Euro, and shall be responsible for any bank fees or surcharges or other costs or expenses of making payment to ENPULSION.
5.3. Unless otherwise expressly agreed by the Parties in writing, Customer must pay the full purchase price for any Products within four weeks after ENPULSION’S acceptance of Customer’s offer. Delivery of the Products will only be processed after ENPULSION receives the full purchase price.
5.4. In case ENPULSION and Customer agree that a down payment is required in connection with the purchase or any Products by Customer, Customer shall pay the down payment to ENPULSION prior to ENPULSION beginning any activity in connection with the Agreement. Unless otherwise expressly agreed by the Parties in writing, (a) any down payment is due and payable by Customer within 14 days after ENPULSION accepts Customer’s offer and (b) Customer shall pay the remaining purchase price for the relevant Products within 14 days after ENPULSION’S delivery of the respective Products.
5.5. Customer shall under no circumstances set-off or net against amounts otherwise payable by Customer to ENPULSION under these GTCs any amounts due to Customer from ENPULSION or any claims that Customer may have against Customer shall not be entitled to retain any payments owed to ENPULSION hereunder, and hereby waives any rights of retention, set-off, warehousing, judicial deposit or any kind of bond.
6. Default in Payment
6.1. In case of Customer’s payment default, ENPULSION is entitled to claim interest on any overdue amounts at a rate equal to 12% per annum (or, if lower, the maximum rate permitted under applicable laws) and to withhold any further performance under its Agreement with Customer. Such remedies shall not be exclusive, and notwithstanding ENPULSION’s exercise thereof, ENPULSION shall retain the right to pursue any and all other claims and remedies available to it, whether at law or in equity.
6.2. Customer shall be liable for any and all costs and expenses incurred by ENPULSION to enforce Customer’s obligations to make payment hereunder, whether judicially or otherwise, including but not limited to the actual fees and expenses of legal and tax counsel and debt-collection agencies. In addition to and not in limitation of the foregoing, Customer may be charged a base mount of EUR 40 per collection action taken (whether in writing, verbally, or otherwise) irrespective of damage and fault. The foregoing remedies shall not be exclusive, and notwithstanding ENPULSION’s exercise thereof, ENPULSION shall retain the right to pursue any and all other claims and remedies available to it, whether at law or in equity.
6.3. Customer shall be responsible for and shall pay to ENPULSION, any and all additional costs, expenses, fees or other amounts that may be incurred by ENPULSION as a result of any delay by Customer in the performance of its obligations to ENPULSION hereunder or otherwise.
7. Delivery and Transfer of Risk, Force Majeure
7.1. The Products shall be deemed delivered when they have been prepared for shipment by ENPULSION (Delivery Time).
7.2. ENPULSION shall give Customer at least 1 week advance notice of the Delivery Time.
7.3. The delivery terms for all deliveries of Products hereunder are EXW Wiener Neustadt, Austria (Incoterms 2010). Accordingly, Customer shall be solely responsible to arrange for and complete the shipment of Products from ENPULSION’S facility from and after the Delivery Time. For avoidance of doubt, Customer shall pay all costs and expenses related to shipment of the Products, including, without limitation, the costs and expenses of any common carrier or other shipper or freight company, and cargo insurance, if any.
7.4. Any specified delivery dates communicated by ENPULSION to Customer are non-binding estimates only.
7.5. To the greatest extent permitted by law, Customer hereby irrevocably waives and agrees not to assert any claims against ENPULSION due to ENPULSION’s delayed delivery of any Products or withdrawal from any Agreement to provide Products, in each case as contemplated and permitted by these ENPULSION shall under no circumstances be liable to Customer for any losses or damages of any kind suffered or incurred by Customer due to any of the foregoing.
7.6. ENPULSION shall bear the costs for preparing the Products for shipment as of the Delivery Time under Section 7.1.
7.7 A Party whose performance of its obligations hereunder (except payment obligations unless otherwise expressly provided herein) is prevented, restricted or interfered with by reason of a Force Majeure condition shall be excused from such performance to the extent and during the continuance of such Force Majeure condition; provided, that such Party immediately continues performance at such time and to the extent the Force Majeur condition is removed. Delivery and other timing obligations hereunder shall be extended on a day-for-day basis, during the continuation of any Force Majeure condition.
For the purposes of this Section 7.7., “Force Majeure” shall mean the actual occurrence of any extraordinary event beyond the reasonable control of a Party or such Party’s suppliers or other commercial counterparties, including but not limited to acts of warfare (whether an actual declaration of war is made or not), acts of terrorism (in particular through non-state actors), sabotage, insurrection, rebellion, strike, riot or other act of civil disobedience, acts of a public enemy, actions or inactions of any governmental authority, judicial action, fire, accident, explosion, epidemic, pandemic, quarantine, natural disasters such as storm, flood, volcanic activity, or earthquake, or any other extraordinary event commonly referred to as “force majeure”, “vis major”, “acts of God” or the like.
8. Transfer of Title
8.1. ENPULSION retains all right, title and interest in and to all Products until payment in full of the purchase price for such Products been received by ENPULSION, whether or not such Products have been delivered to Customer hereunder.
8.2. If title to any Product remains with ENPULSION after delivery of such Product to Customer, Customer may resell such Products only if the Customer procures and delivers to ENPULSION a written acknowledgment from such transferee in form satisfactory to ENPULSION acknowledging that such transfer is in all respects subject to ENPULSION’s retained title, together with any and all other information that ENPULSION may reasonably request in connection with such transfer or such transferee.
8.3. All claims of Customer resulting from a resale of Products as to which ENPULSION retains title are hereby assigned to ENPULSION as security for all claims that ENPULSION has or may have against Customer.
9. Warranty
9.1. ENPULSION hereby expressly excludes any warranty to the greatest extent permitted by law.
9.2. Notwithstanding the existence of any non-waivable warranty rights that may be available to Customer under applicable law, in no event shall ENPULSION be liable to Customer for any amount in connection with claims relating to any Product in excess of the purchase price actually paid by Customer to ENPULSION for the such Product, including, without limitation, in connection with any claims for ENPULSION’s gross negligence or willful misconduct, for the Customer’s consequential or other special damages, or otherwise.
9.3. Any non-waivable warranty rights to which Customer might otherwise be entitled shall be automatically voided and of no further effect with respect to any Product if such Product has been altered or modified in any way, or if an attempt to alter or modify such Product has been made, in each case, by anyone other than ENPULSION.
9.4. Customer may make a claim with respect to any non-waivable warranty as to any Product only if Customer immediately, but not later than 14 days following ENPULSION’s delivery of such Product, notifies ENPULSION in writing of any defects for which any such warranty claim can and is to be made, including a detailed report of any such defects. Following receipt of any such notification from Customer, ENPULSION shall notify Customer whether or not to return the relevant Product to ENPULSION and as to how ENPULSION has otherwise determined to proceed with respect to Customer’s claim.
9.5. If and to the extent a non-waivable warranty applies to any Product defect, in ENPULSION’s sole discretion, it may choose to replace such defective Product or defective parts thereof, or to repair such defective Product. ENPULSION may also ask the Customer to return any such defective Product to ENPULSION for repair, or grant a price reduction with respect thereto. ENPULSION may in its discretion choose whether ENPULSION or Customer shall bear the costs of the return of any such defective Product and the shipment of the repaired or replaced such Product.
9.6. In case that ENPULSION performs a repair of Products at the Customer’s facilities, Customer shall provide required workers, materials and tools, as deemed necessary by ENPULSION at Customer’s own costs. Customer shall support ENPULSION in repairing the Products and shall make all required arrangements deemed necessary by ENPULSION.
9.7. Any service performed by ENPULSION with respect to any Product shall not extend any otherwise applicable warranty period with respect to such Product, nor by performing any such service shall ENPULSION be deemed to acknowledge or imply any rights by Customer (including any warranty rights) or any fault or liability on the part of ENPULSION.
9.8. If ENPULSION accepts the return of any allegedly defective Product or consents to examine any allegedly defective Product, no such acceptance or examination by ENPULSION shall under any circumstances be construed as an admission by ENPULSION with respect to any claim of Customer or of any fault or liability on the part of ENPULSION.
9.9. 924 ABGB shall not apply. The burden of proof concerning the presence of the defect at time of delivery lies with the Customer.
9.10. The images and content on ENPULSION’s website are for illustration purposes only. Deviations between the delivered Products and any such images are possible due to different computer settings, and any such deviation shall not constitute a defect with respect to a Product.
9.11. The assignment of warranty claims, if any, shall be excluded.
10. Exclusion and Limitation of ENPULSION’s Liability
10.1. ENPULSION shall not be liable to Customer for any claims for losses or damages unless and only to the extent that any such losses or damages were caused by ENPULSION intentionally. ENPULSION shall only be liable for personal injury in the case that ENPULSION’s gross negligence actually and directly results in personal injury.
10.2. ENPULSION’s total liability in case of any claims by Customer or any other Person for losses or damages in connection with any Product is expressly limited to any amounts actually received by ENPULSION from such Customer with respect to such Product. Under no circumstances shall ENPULSION be liable for loss of profits, punitive, consequential or any other indirect or special damages.
10.3. Only monetary compensation shall be rendered by ENPULSION in case ENPULSION shall be determined to be liable to Customer for any losses or damages. Customer expressly waives any legal and equitable rights to specific performance or other equitable relief.
10.4. To the extent ENPULSION might otherwise be liable for any claims for losses or damages with respect to any Product, such claims must be legally asserted by Customer against ENPULSION within three months from the date on which Customer obtains (or should reasonably have been expected to obtain) actual knowledge of the facts and circumstances giving rise to such losses or damages, without regard to whether, at such time, Customer was aware of the amount or severity of the losses or The burden of proving that Customer neither had actual knowledge nor should reasonably have been expected to have knowledge of the facts and circumstances giving rise to the losses or damages lies with the Customer and not with ENPULSION.
10.5. ENPULSION assumes no liability for the retention of any documents, manuscripts, drafts, sketches, samples, models, or films or similar materials provided by Customer to ENPULSION, unless any of the same are lost or damaged result of ENPULSION’s willful misconduct. Customer is solely responsible for adequate insurance for such items.
10.6. ENPULSION assumes no liability for Customer’s assembling of Products or Customer’s placing in service or other use of Products.
10.7. Limitations of liability shall also apply to any pre-contractual (culpa in contrahendo) or non- contractual (ex delicto) obligations under law.
11. Data Processing
ENPULSION handles the data of Customers with care. It will not forward any data to third parties, unless is required under law to do so.
12. Websites and services of third-party-providers
Services of ENPULSION may include links to websites, products, and services of other companies. ENPULSION is not liable for the content of such websites, products, and services. The data collected by such third-party providers are governed by their respective privacy policies. ENPULSION recommends that Customer inquire with such third parties about their privacy policies.
13. Usage of Cookies
For the purposes of facilitating an easier online experience for Customer, and with regard to the processing of the Agreement by ENPULSION, certain intellectual property of Customer is stored by ENPULSION as well as name, address, and credit card details of Customer.
14. IP Rights
14.1. Nothing herein shall be construed as an assignment by ENPULSION of any intellectual property or other proprietary rights to Customer in the course of the Agreement.
14.2. Each Party acknowledges and agrees that it obtains no rights in the other Party’s trade name, trademarks, services marks, copyright materials, patents, patent applications, or other intellectual property, and that all goodwill arising as a result of the Agreement inures to the benefit of the respective owner of the intellectual property. Each Party shall retain the rights to any intellectual property it holds as of the date of the Agreement and ENPULSION shall be the sole and exclusive owner of any intellectual property created in the performance of the Agreement.
14.3. ENPULSION grants to Customer with regard to any Product sold under the Agreement, solely (i) a non-transferable, non-exclusive license to use the Products which is limited to the purpose of the Agreement, (ii) the right to use the software included in such Products, and (iii) to use the documentation related to any such Product.
14.4. Customer may not alter or recreate, or attempt to alter or recreate (i) any Product, (ii) the software in such Product, or (iii) any part thereof, in each case, in any scale.
14.5. All pictures, images, trademarks, logos, designs, drafts, pertinent drawings and descriptions of ENPULSION are protected by copyrights. Customer may not make use of them other than as agreed upon under these GTCs. Customer may in particular not copy them or make them accessible to third parties.
14.6. Notwithstanding Section 14.2, ENPULSION may use Customer’s name and company name for marketing purposes, including, without limitation, in connection with ENPULSION’s press releases, public announcements, advertisements, or other form of publicity concerning the Agreement with Customer.
15. Product Labeling
ENPULSION has the right to determine the labeling of the Products in its sole discretion. Such label may include, without limitation, a trade mark or logo of ENPULSION.
16. Governing Law, Forum
16.1. Any disputes arising out of or in context of a relationship governed by these GTCs shall be governed by Austrian Law under the explicit exclusion of the United Nations Convention on Contracts on the International Sale of Goods, and without giving effect to such rules of international private law that would lead to the application of any law other than Austrian law.
16.2. Any disputes relating to these GTCs shall be subject to the exclusive jurisdiction of the courts competent for the first district of Vienna (Wien-Innere Stadt).
17. Miscellaneous
17.1. Customer is solely responsible that all legal requirements for the use and a possible resale of Products by Customer are met and complied with.
17.2. All amendments, modifications, changes, supplements and additions to these GTCs shall be in writing and executed by the Parties. Any waiver of any term or condition of these GTCs shall be in writing and shall be executed by or on behalf of the Party against whom enforcement of such waiver is sought.
17.3. Whenever under this GTCs written form is required, email suffices, unless expressly otherwise required by this GTCs or mandatory applicable law.
17.4. The purpose of Section titles and headings in these GTCs is solely to provide structure and clarity and any such Section titles or headings shall have no legal effect in the construction or interpretation of these GTCs.
17.5. The invalidity of one or more, or parts, of terms or provisions of these GTCs shall not affect the validity of any other term or provision of the GTCs. ENPULSION and Customer agree to reach a binding agreement to replace the invalid provision by a valid term as closely as possible to the purpose of the invalid provision.',
        ], true);

        $this->addScreen('Terms of Service USA', [
            'GENERAL TERMS AND CONDITIONS AND TERMS OF USE - ENPULSION GmbH' => 'For the General Terms and Conditions of Use for all customers outside of the U.S. please refer to <a href="https://www.enpulsion.com/terms-of-service/">GTCs ENPULSION GmbH</a>.
1. General Terms and Conditions of Use
1.1. These General Terms and Conditions and Terms of Use (GTCs) shall govern all agreements between Enpulsion Enpulsion, , a corporation organized and existing under the laws of Delaware, USA, with an address at 55 River Oaks Pl. #546, San Jose, California 95134 (together, ENPULSION), on the one hand, and the customer (Customer), on the other hand. The Customer and ENPULSION are each referred to herein as a Party.
1.2. Neither ENPULSION nor Customer is a Prohibited Person (as defined below) and the Agreement does not constitute a transaction as set out in this Section 1.2
As used in these GTCs, “Prohibited Person” means a natural person or legal entity with legal personality (Person),
i) subject to a prohibition (including economic, financial and/or travel prohibitions) or other restrictive measures or sanctions by any government or inter-governmental organization, including but not limited to, (a) the United Nations Security Council Sanctions Committee, (b) under the lists maintained by the European Union’s European External Action Service designed to implement the EU’s Common Foreign and Security Policy, and (c) the country of residence or organization of such Person.
ii) subject to the Foreign Corrupt Practices Act and economic sanctions and export controls administered by the S. Department of the Treasury and the U.S. Department of Commerce.
iii) that transacts or otherwise deals, directly or indirectly, with or is otherwise related to an Embargoed Jurisdiction or Sanctioned Person or that exports or reexports, directly or indirectly, in violation of any applicable US laws or regulations, or otherwise uses the Content for any prohibited purpose.
Content means any regulated data transmitted in connection with these GTCs.
Embargoed Jurisdiction means a country, region, territory or government with respect to which the U.S. government imposes a trade or investment embargo from time to time, which presently includes Crimea, Cuba, Iran, North Korea, and Syria.
Sanctioned Person means any Person with respect to which or whom U.S. citizens are generally forbidden to transact under economic sanctions including, without limitation, a person on the List of Specially Designated Nationals and Blocked Persons.
1.3. These GTCs shall govern the relationship of the Parties in all respects unless and only to the extent that the Parties expressly agree otherwise in Unless expressly specified therein in writing, these GTCs shall govern and are hereby incorporated by reference into any and all requests for quotations, acceptances, purchase orders or other agreements, correspondence or arrangements between the Parties (whether written or oral). In the event of any conflict between any of the foregoing and the terms and conditions of the GTCs, the terms and conditions of the GTCs shall control and prevail as between the Parties.
1.4. For avoidance of doubt, these GTCs supersede any and all prior, contemporaneous or future oral discussions, agreements, negotiations, arrangements or understandings between the Parties.
1.5. ENPULSION reserves the right, from time to time at its discretion and without notice to Customer, to update, amend or otherwise supplement these GTCs, and Customer shall be bound by and subject to the GTCs as they may from time to time be so updated, amended or supplemented. The GTCs, as so updated, amended or supplemented from time to time will be available for review by Customer on the homepage of ENPULSION at https://enpulsion.com/.
1.6. Customer shall at all times ensure and be responsible for the full compliance with and observance of these GTCs by Customer’s affiliates, officers, directors, employees, agents, contractors, consultants, vendors, invitees, and representatives.
2. Scope and Conclusion of the Agreement
2.1. ENPULSION’s display of its products and services (including any related pricing or other information) on its website, or in catalogs, brochures, or datasheets or in any quotation issued by ENPULSION to Customer, shall under no circumstances constitute a binding offer capable of being accepted by Customer to conclude an agreement for the purchase and sale of ENPULSION’s products and services, but rather, shall constitute only a non-binding invitation from ENPULSION to Customer to make an offer to ENPULSION (invitatio ad offerendum) for the purchase and sale of such products and services.
2.2. In response to a quotation issued by ENPULSION at Customer’s request, or otherwise as permitted on or through ENPULSION’s website or by ENPULSION’s personnel, Customer may submit a binding offer to purchase specified products and services of ENPULSION (Products) by submitting a written offer for the purchase of such Products to ENPULSION. For avoidance of doubt, an offer sent via email or facsimile shall constitute a “written offer” for purposes of these GTCs.
2.3. Once Customer has submitted a written offer, such written offer shall be binding upon Customer and shall be irrevocable by Customer for a period of four weeks after ENPULSION’s receipt of such offer. Following the expiration of such four-week period, such written offer shall remain binding upon Customer and shall remain subject to acceptance by ENPULSION for an unlimited period of time, unless and until ENPULSION receives from Customer an express written revocation thereof.
2.4. A binding agreement for the purchase and sale of the Products specified in Customer’s offer shall only be deemed to have been entered into by the Parties at such time, if any, as ENPULSION delivers to Customer an express written acceptance of Customer’s offer (which written acceptance may be delivered by email, facsimile, courier service, ordinary mail or otherwise) (Agreement).
2.5. Regardless of whether ENPULSION and Customer enter into an Agreement for the relevant Products, Customer shall be solely responsible for the fees and costs of any drawings, sketches, samples, calculations or simulations, and any other work or services performed by ENPULSION in connection with any offer by, or negotiations with Customer, to the extent any of the same are requested by Customer and/or deemed appropriate by ENPULSION. ENPULSION shall invoice Customer at ENPULSION’s standard rates for any such fees and costs, and any such fees and costs shall be due and payable by Customer to ENPULSION as otherwise specified under Section 5 promptly upon (but in no event later than 14 days after) Customer being invoiced by ENPULSION.
2.6. ENPULSION reserves the right in its sole discretion to decline (i) any offers for any reason of for no reason in its sole discretion and (ii) to deliver Products to any given address, region or jurisdiction.
3. Obligations of Customer
3.1. Customer guarantees that all information, regardless of its form, provided to ENPULSION by or on behalf of Customer:
a. is not false, inaccurate or misleading;
b. does not omit any material facts;
c. does not breach any rights of third parties, or agreements with such third parties, including any non-disclosure of confidentiality obligations to which Customer may be subject;
d. does not breach any laws, statutes, regulations or other applicable laws; and
e. does not contain any viruses or programs which cause damages, impede or which intercept information, data and personal information or use such data illegitimately.
3.2. Customer shall be responsible for the payment of any and all additional fees or costs in connection with any services requested by Customer, or any services which ENPULSION reasonably believes to be necessary in connection with its Agreement to provide Products to Customer, in each case, whether or not such services are expressly covered by the Agreement. ENPULSION shall invoice Customer at ENPULSION’s standard rates for any such fees and costs, and such fees and costs shall be due and payable by Customer to ENPULSION as otherwise specified under Section 5 promptly upon (and in no event more than 14 days following) Customer being invoiced by ENPULSION.
4. Prices and Availability
4.1. The pricing and other information set forth in ENPULSION’s price lists, advertisements, marketing and sales materials, catalogs, brochures and datasheets, and on ENPULSION’s website, is at all times subject to change. ENPULSION reserves the right to amend such pricing and other information at any time and without notice to Customer acknowledges and agrees that in relying on any information on ENPULSION’s website, it shall refer to the most current version thereof, and actively contact ENPULSION in case of any doubt or conflict with previously received information.
4.2. ENPULSION reserves the right at any time, including after entering into an Agreement with Customer, to refrain from fulfilling Customer’s order, in which case, ENPULSION shall inform Customer as soon as is practical after any such determination is made that the ordered Products are unavailable, and any amounts in respect of the purchase price for the Products, if already paid by Customer, shall be refunded.
5. Conditions of payment
5.1. ENPULSION accepts payments via wire transfer and checks.
5.2. Customer shall make all payments in USD, and shall be responsible for any bank fees or surcharges or other costs or expenses of making payment to ENPULSION.
5.3. Unless otherwise expressly agreed by the Parties in writing, Customer must pay the full purchase price for any Products within four weeks after ENPULSION’S acceptance of Customer’s offer. Delivery of the Products will only be processed after ENPULSION receives the full purchase price.
5.4. In case ENPULSION and Customer agree that a down payment is required in connection with the purchase or any Products by Customer, Customer shall pay the down payment to ENPULSION prior to ENPULSION beginning any activity in connection with the Agreement. Unless otherwise expressly agreed by the Parties in writing, (a) any down payment is due and payable by Customer within 14 days after ENPULSION accepts Customer’s offer and (b) Customer shall pay the remaining purchase price for the relevant Products within 14 days after ENPULSION’S delivery of the respective Products.
5.5. Customer shall under no circumstances set-off or net against amounts otherwise payable by Customer to ENPULSION under these GTCs any amounts due to Customer from ENPULSION or any claims that Customer may have against Customer shall not be entitled to retain any payments owed to ENPULSION hereunder, and hereby waives any rights of retention, set-off, warehousing, judicial deposit or any kind of bond.
6. Default in Payment
6.1. In case of Customer’s payment default, ENPULSION is entitled to claim interest on any overdue amounts at a rate equal to 12% per annum (or, if lower, the maximum rate permitted under applicable laws) and to withhold any further performance under its Agreement with Customer. Such remedies shall not be exclusive, and notwithstanding ENPULSION’s exercise thereof, ENPULSION shall retain the right to pursue any and all other claims and remedies available to it, whether at law or in equity.
6.2. Customer shall be liable for any and all costs and expenses incurred by ENPULSION to enforce Customer’s obligations to make payment hereunder, whether judicially or otherwise, including but not limited to the actual fees and expenses of legal and tax counsel and debt-collection agencies. In addition to and not in limitation of the foregoing, Customer may be charged a base mount of USD 100 per collection action taken (whether in writing, verbally, or otherwise) irrespective of damage and fault. The foregoing remedies shall not be exclusive, and notwithstanding ENPULSION’s exercise thereof, ENPULSION shall retain the right to pursue any and all other claims and remedies available to it, whether at law or in equity.
6.3. Customer shall be responsible for and shall pay to ENPULSION, any and all additional costs, expenses, fees or other amounts that may be incurred by ENPULSION as a result of any delay by Customer in the performance of its obligations to ENPULSION hereunder or otherwise.
7. Delivery and Transfer of Risk, Force Majeure
7.1. The Products shall be deemed delivered when the Customer has received the shipment of the Products (Delivery Time).
7.2. ENPULSION shall give Customer at least 1 week advance notice of the Delivery Time.
7.3. The delivery terms for all deliveries of Products hereunder are DDP (Incoterms 2010).
7.4. Any specified delivery dates communicated by ENPULSION to Customer are non-binding estimates only.
7.5. To the greatest extent permitted by law, Customer hereby irrevocably waives and agrees not to assert any claims against ENPULSION due to ENPULSION’s delayed delivery of any Products or withdrawal from any Agreement to provide Products, in each case as contemplated and permitted by these ENPULSION shall under no circumstances be liable to Customer for any losses or damages of any kind suffered or incurred by Customer due to any of the foregoing.
7.6. ENPULSION shall bear the costs for preparing the Products for shipment as of the Delivery Time under Section 7.1.
7.7 A Party whose performance of its obligations hereunder (except payment obligations unless otherwise expressly provided herein) is prevented, restricted or interfered with by reason of a Force Majeure condition shall be excused from such performance to the extent and during the continuance of such Force Majeure condition; provided, that such Party immediately continues performance at such time and to the extent the Force Majeur condition is removed. Delivery and other timing obligations hereunder shall be extended on a day-for-day basis, during the continuation of any Force Majeure condition.
For the purposes of this Section 7.7., “Force Majeure” shall mean the actual occurrence of any extraordinary event beyond the reasonable control of a Party or such Party’s suppliers or other commercial counterparties, including but not limited to acts of warfare (whether an actual declaration of war is made or not), acts of terrorism (in particular through non-state actors), sabotage, insurrection, rebellion, strike, riot or other act of civil disobedience, acts of a public enemy, actions or inactions of any governmental authority, judicial action, fire, accident, explosion, epidemic, pandemic, quarantine, natural disasters such as storm, flood, volcanic activity, or earthquake, or any other extraordinary event commonly referred to as “force majeure”, “vis major”, “acts of God” or the like.
8. Transfer of Title
8.1. ENPULSION retains all right, title and interest in and to all Products until payment in full of the purchase price for such Products been received by ENPULSION, whether or not such Products have been delivered to Customer hereunder.
8.2. If title to any Product remains with ENPULSION after delivery of such Product to Customer, Customer may resell such Products only if the Customer procures and delivers to ENPULSION a written acknowledgment from such transferee in form satisfactory to ENPULSION acknowledging that such transfer is in all respects subject to ENPULSION’s retained title, together with any and all other information that ENPULSION may reasonably request in connection with such transfer or such transferee.
8.3. All claims of Customer resulting from a resale of Products as to which ENPULSION retains title are hereby assigned to ENPULSION as security for all claims that ENPULSION has or may have against Customer.
9. Warranty
9.1. ENPULSION hereby expressly excludes any warranty to the greatest extent permitted by law.
9.2. Notwithstanding the existence of any non-waivable warranty rights that may be available to Customer under applicable law, in no event shall ENPULSION be liable to Customer for any amount in connection with claims relating to any Product in excess of the purchase price actually paid by Customer to ENPULSION for the such Product, including, without limitation, in connection with any claims for ENPULSION’s gross negligence or willful misconduct, for the Customer’s consequential or other special damages, or otherwise.
9.3. Any non-waivable warranty rights to which Customer might otherwise be entitled shall be automatically voided and of no further effect with respect to any Product if such Product has been altered or modified in any way, or if an attempt to alter or modify such Product has been made, in each case, by anyone other than ENPULSION.
9.4. Customer may make a claim with respect to any non-waivable warranty as to any Product only if Customer immediately, but not later than 14 days following ENPULSION’s delivery of such Product, notifies ENPULSION in writing of any defects for which any such warranty claim can and is to be made, including a detailed report of any such defects. Following receipt of any such notification from Customer, ENPULSION shall notify Customer whether or not to return the relevant Product to ENPULSION and as to how ENPULSION has otherwise determined to proceed with respect to Customer’s claim.
9.5. If and to the extent a non-waivable warranty applies to any Product defect, in ENPULSION’s sole discretion, it may choose to replace such defective Product or defective parts thereof, or to repair such defective Product. ENPULSION may also ask the Customer to return any such defective Product to ENPULSION for repair, or grant a price reduction with respect thereto. ENPULSION may in its discretion choose whether ENPULSION or Customer shall bear the costs of the return of any such defective Product and the shipment of the repaired or replaced such Product.
9.6. In case that ENPULSION performs a repair of Products at the Customer’s facilities, Customer shall provide required workers, materials and tools, as deemed necessary by ENPULSION at Customer’s own costs. Customer shall support ENPULSION in repairing the Products and shall make all required arrangements deemed necessary by ENPULSION.
9.7. Any service performed by ENPULSION with respect to any Product shall not extend any otherwise applicable warranty period with respect to such Product, nor by performing any such service shall ENPULSION be deemed to acknowledge or imply any rights by Customer (including any warranty rights) or any fault or liability on the part of ENPULSION.
9.8. If ENPULSION accepts the return of any allegedly defective Product or consents to examine any allegedly defective Product, no such acceptance or examination by ENPULSION shall under any circumstances be construed as an admission by ENPULSION with respect to any claim of Customer or of any fault or liability on the part of ENPULSION.
9.9. 924 ABGB shall not apply. The burden of proof concerning the presence of the defect at time of delivery lies with the Customer.
9.10. The images and content on ENPULSION’s website are for illustration purposes only. Deviations between the delivered Products and any such images are possible due to different computer settings, and any such deviation shall not constitute a defect with respect to a Product.
9.11. The assignment of warranty claims, if any, shall be excluded.
10. Exclusion and Limitation of ENPULSION’s Liability
10.1. ENPULSION shall not be liable to Customer for any claims for losses or damages unless and only to the extent that any such losses or damages were caused by ENPULSION intentionally. ENPULSION shall only be liable for personal injury in the case that ENPULSION’s gross negligence actually and directly results in personal injury.
10.2. ENPULSION’s total liability in case of any claims by Customer or any other Person for losses or damages in connection with any Product is expressly limited to any amounts actually received by ENPULSION from such Customer with respect to such Product. Under no circumstances shall ENPULSION be liable for loss of profits, punitive, consequential or any other indirect or special damages.
10.3. Only monetary compensation shall be rendered by ENPULSION in case ENPULSION shall be determined to be liable to Customer for any losses or damages. Customer expressly waives any legal and equitable rights to specific performance or other equitable relief.
10.4. To the extent ENPULSION might otherwise be liable for any claims for losses or damages with respect to any Product, such claims must be legally asserted by Customer against ENPULSION within three months from the date on which Customer obtains (or should reasonably have been expected to obtain) actual knowledge of the facts and circumstances giving rise to such losses or damages, without regard to whether, at such time, Customer was aware of the amount or severity of the losses or The burden of proving that Customer neither had actual knowledge nor should reasonably have been expected to have knowledge of the facts and circumstances giving rise to the losses or damages lies with the Customer and not with ENPULSION.
10.5. ENPULSION assumes no liability for the retention of any documents, manuscripts, drafts, sketches, samples, models, or films or similar materials provided by Customer to ENPULSION, unless any of the same are lost or damaged result of ENPULSION’s willful misconduct. Customer is solely responsible for adequate insurance for such items.
10.6. ENPULSION assumes no liability for Customer’s assembling of Products or Customer’s placing in service or other use of Products.
10.7. Limitations of liability shall also apply to any pre-contractual (culpa in contrahendo) or non- contractual (ex delicto) obligations under law.
11. Data Processing
ENPULSION handles the data of Customers with care. It will not forward any data to third parties, unless is required under law to do so.
12. Websites and services of third-party-providers
Services of ENPULSION may include links to websites, products, and services of other companies. ENPULSION is not liable for the content of such websites, products, and services. The data collected by such third-party providers are governed by their respective privacy policies. ENPULSION recommends that Customer inquire with such third parties about their privacy policies.
13. Usage of Cookies
For the purposes of facilitating an easier online experience for Customer, and with regard to the processing of the Agreement by ENPULSION, certain intellectual property of Customer is stored by ENPULSION as well as name, address, and credit card details of Customer.
14. IP Rights
14.1. Nothing herein shall be construed as an assignment by ENPULSION of any intellectual property or other proprietary rights to Customer in the course of the Agreement.
14.2. Each Party acknowledges and agrees that it obtains no rights in the other Party’s trade name, trademarks, services marks, copyright materials, patents, patent applications, or other intellectual property, and that all goodwill arising as a result of the Agreement inures to the benefit of the respective owner of the intellectual property. Each Party shall retain the rights to any intellectual property it holds as of the date of the Agreement and ENPULSION shall be the sole and exclusive owner of any intellectual property created in the performance of the Agreement.
14.3. ENPULSION grants to Customer with regard to any Product sold under the Agreement, solely (i) a non-transferable, non-exclusive license to use the Products which is limited to the purpose of the Agreement, (ii) the right to use the software included in such Products, and (iii) to use the documentation related to any such Product.
14.4. Customer may not alter or recreate, or attempt to alter or recreate (i) any Product, (ii) the software in such Product, or (iii) any part thereof, in each case, in any scale.
14.5. All pictures, images, trademarks, logos, designs, drafts, pertinent drawings and descriptions of ENPULSION are protected by copyrights. Customer may not make use of them other than as agreed upon under these GTCs. Customer may in particular not copy them or make them accessible to third parties.
14.6. Notwithstanding Section 14.2, ENPULSION may use Customer’s name and company name for marketing purposes, including, without limitation, in connection with ENPULSION’s press releases, public announcements, advertisements, or other form of publicity concerning the Agreement with Customer.
15. Product Labeling
ENPULSION has the right to determine the labeling of the Products in its sole discretion. Such label may include, without limitation, a trade mark or logo of ENPULSION.
16. Governing Law, Forum
16.1. This Agreement shall be governed by and construed, enforced and interpreted under the laws of the State of New York, without regard to its laws relating to conflict or choice of laws.
16.2. The parties agree to the exclusive jurisdiction and venue of the state and federal courts located in New York as to any matters properly subject to court proceeding, and agree not to contest the jurisdiction, venue or convenience of such courts as to any matter arising out of or relating to this agreement.
17. Miscellaneous
17.1. Customer is solely responsible that all legal requirements for the use and a possible resale of Products by Customer are met and complied with.
17.2. All amendments, modifications, changes, supplements and additions to these GTCs shall be in writing and executed by the Parties. Any waiver of any term or condition of these GTCs shall be in writing and shall be executed by or on behalf of the Party against whom enforcement of such waiver is sought.
17.3. Whenever under this GTCs written form is required, email suffices, unless expressly otherwise required by this GTCs or mandatory applicable law.
17.4. The purpose of Section titles and headings in these GTCs is solely to provide structure and clarity and any such Section titles or headings shall have no legal effect in the construction or interpretation of these GTCs.
17.5. The invalidity of one or more, or parts, of terms or provisions of these GTCs shall not affect the validity of any other term or provision of the GTCs. ENPULSION and Customer agree to reach a binding agreement to replace the invalid provision by a valid term as closely as possible to the purpose of the invalid provision.',
        ], true);
    }

    private function addScreen($title, $pages, $hidden = false, $bg_image = null)
    {
        // Add screen
        $slug = str_slug(strtolower($title));
        $weight = Screen::withoutGlobalScopes()->count() + 1;
        $screen = Screen::create(compact('title', 'slug', 'weight', 'hidden', 'bg_image'));

        // Add pages
        if (!$pages) return;
        $weight = 1;
        $screen_id = $screen->id;

        foreach ($pages as $title => $page) {
            $model = compact('title', 'weight', 'screen_id');

            // Eewww php...
            $gallery = null;
            if (isset($page['gallery'])) {
                $gallery = $page['gallery'];
                unset($page['gallery']);
            }
            // </eww>

            if (is_array($page)) {
                $model = array_merge($model, $page);
            } else if(is_string($page)) {
                $model['text'] = $page;
            }

            $pageModel = Page::create($model);

            if ($gallery) {
                foreach ($gallery as $imageFile) {
                    $pageModel->addMedia(public_path("images/content/$imageFile"))
                        ->preservingOriginal()
                        ->toMediaCollection('gallery');
                }
            }

            $weight++;
        }
    }
}
