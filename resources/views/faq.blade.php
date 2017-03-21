@extends('main')
@section('title', 'FAQ')
@section('content')

<h1>FAQ</h1>
<br/>
<!-- -->
<div class="col-md-10">
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
<!-- Genenral Info --> 
    <div class="panel-heading">
      <h4 class="panel-title" style="color:#8f001a"><!-- UO Garnet-->
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Questions d'informations générales - General Information Questions</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
        Demandes de renseignements sur les services de la Bibliothèque qui exigent uniquement la connaissance, l’utilisation, 
        la recommandation, ou l’explication de sources d’information décrivant la bibliothèque, comme les horaires, 
        les plans d’étage et les manuels de l’Université d’Ottawa (p. ex. : guide des cours, calendrier universitaire, etc.).
        <br/>
      <br/>Exemples:
      <ul>
      <li>Régler des problèmes de machines distributrices de cartes et de lecteurs de cartes.</li>
      <li>Donner des consignes d’utilisation pour les photocopieurs, les imprimantes, etc.</li>
      <li>Répondre aux questions simples des utilisateurs concernant la connexion aux divers systèmes.</li>
      <li>Aider les utilisateurs à sauvegarder des fichiers, à utiliser une clé USB, etc.</li>
      <li>Aider les utilisateurs à s’orienter dans la bibliothèque (leur indiquer notamment où se trouve l’agrafeuse) et dans tout le campus.</li>
      <li>Donnez des renseignements sur les heures d’ouverture de la Bibliothèque.</li>
      <li>Répondre à des questions simples sur le fonctionnement de la Bibliothèque, dont les périodes de prêts normales, l’accès des visiteurs et la politique en matière de boissons et de nourriture.</li>
      </ul>
      <hr>
        Questions that facilitate the logistical use of the library and that do not involve knowledge, use, recommendations, interpretation,
        or instruction in the use of any information source other than those that describe the library, such as schedules, floor plans, 
        and University of Ottawa handbooks (e.g. course guide, university calendar, etc.). 
        <br/>
      <br/>Examples:
      <ul>
      <li>Dealing with problems with print card dispensers and readers.</li>
      <li>Providing operating instructions for copiers, printers, etc.</li>
      <li>Helping a user with basic login questions.</li>
      <li>Helping a user save files, use flash drives, etc.</li>
      <li>Providing physical directions (including to the stapler), both in the library and across campus.</li>
      <li>Providing hours of operation information.</li>
      <li>Answering basic policy questions such as standard loan periods, guest access, and food/drink policy.</li>
      </ul>
      </div>
    </div>
  </div>
<!-- Bibliographic -->  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title" style="color:#8f001a">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Questions de recherhce bibliographique - Bibliographic Questions</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse"> <!-- add 'in' next to collapse to have it expand -->
      <div class="panel-body">
        Demandes de renseignements présentées aux membres du personnel de la Bibliothèque et qui exigent la connaissance, 
        l’utilisation ou la recommandation de sources d’information. Les sources d’information comprennent : (a) les documents imprimés et non imprimés; 
        (b) les bases de données lisibles par machine (comme l’enseignement assisté par ordinateur); (c) les catalogues de la bibliothèque et les autres 
        ressources documentaires; (d) les autres bibliothèques et établissements; et (e) des personnes travaillant à la bibliothèque ou à l’extérieur de 
        celle-ci. Lorsqu’un membre du personnel utilise de l’information obtenue lors d’une recherche précédente pour répondre à une question, 
        la demande doit être rapportée même si la source d’information n’a pas été consultée de nouveau.
      <br/><br/>
        La durée de l’échange ne peut servir à déterminer si la demande constitue réellement une « demande de renseignements ». 
      <br/>
      <br/>Exemples:
      <ul>
      <li>Chercher un document précis dans le catalogue. </li>
      <li>Montrer aux utilisateurs comment faire des recherches dans le catalogue.</li>
      <li>Montrer aux utilisateurs comment lire la cote d’un document.</li>
      <li>Vérifier une référence bibliographique.</li>
      <li>Répondre à des questions administratives qui nécessitent la consultation de diverses sources d’information.</li>
      <li>Montrer aux utilisateurs comment réserver des documents, utiliser DocDel et les PEB, etc.</li>
      </ul>
      <hr> 
      Questions that involve the knowledge, use, and recommendations in the use of information sources by a member of the library staff. Information sources 
      include (a) printed and non-printed material; (b) machine-readable databases (including computer-assisted instruction); (c) the library’s own catalogs 
      and other holdings records; (d) other libraries and institutions through communication or referral; and (e) persons both inside and outside the library. 
      When a staff member uses information gained from previous use of information sources to answer a question, the transaction is reported even if the source 
      is not consulted again.<br/>
      <br/>Duration is not an element in determining whether a transaction is a "Research Question".
      <br/>
      <br/>Examples:
      <ul>
        <li>Looking up known-items in the catalogue.</li>
        <li>Providing an introduction to searching the catalogue.</li>
        <li>Showing a user how to read a call number.</li>
        <li>Verifying a citation.</li>
        <li>Answering policy questions that require consultation of information sources.</li>
        <li>Introducing a user to holds, DocDel, ILL, etc.</li>
      </ul>
      </div>
    </div>
  </div>
<!-- Reference -->  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title" style="color:#8f001a">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Questions de référence - Reference Questions</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
        Demandes de renseignements qui exigent la connaissance, l’utilisation, la recommandation, l’interprétation, 
        l’explication ou la création de sources d’information. Les sources d’information comprennent : …les mêmes que la section « Questions de recherhce bibliographique »
        <br/><br/>
        La durée de l’échange ne peut servir à déterminer si la demande constitue réellement une « demande de renseignements ». 
      <br/>
      <br/>Exemples:
      <ul>
        <li>Montrer aux utilisateurs comment faire des recherches dans les bases de données spécialisées ou consulter un guide de recherche.</li>
        <li>Montrer aux utilisateurs comment faire des recherches sur un sujet précis.</li>
        <li>Aider les  utilisateurs à définir et à clarifier leurs sujets, et à préciser ou à élargir leurs recherches.</li>
        <li>Créer des bibliographies; aider les utilisateurs à utiliser les outils comme RefWorks.</li>
        <li>Présenter les techniques de recherche plus complexes, les références croisées, la recherche interdisciplinaire et les questions à facettes multiples.</li>
        <li>Faire des recherches en profondeur pour des professeurs et des étudiants aux cycles supérieurs (p. ex. : mener une analyse documentaire).</li>
        <li>Offrir du soutien dans le cadre de publications, d’expositions, etc.</li>
        <li>Offrir un soutien à long terme (p. ex. : les demandes nécessitant plusieurs échanges de courriel sur un même un sujet).</li>
      </ul>
      <hr>
      An information contact that involves the knowledge, use, recommendations, interpretation, or instruction in the use or creation of one or more 
      information sources by a member of the library staff. The term includes information and referral service. Information sources include (a) printed 
      and non-printed material; (b) machine-readable databases (including computer-assisted instruction); (c) the library’s own catalogs and other holdings
      records; (d) other libraries and institutions through communication or referral; and (e) persons both inside and outside the library. 
      When a staff member uses information gained from previous use of information sources to answer a question, the transaction is reported even if the 
      source is not consulted again.<br/> 
      <br/>Duration is not an element in determining whether a transaction is a "Research Question".
      <br/>
      <br/>Examples:
      <ul>
        <li>Showing a user how to search a specialized database or a research guide.</li>
        <li>Introducing a user to research on given topic.</li>
        <li>Providing instruction in defining/clarifying topics, focusing/broadening searches.</li>
        <li>Creating bibliographies, assisting with the use of RefWorks type tools.</li>
        <li>Introducing complex search techniques, cross-referencing resources, interdisciplinary research, multi-faceted questions.</li>
        <li>Providing in-depth faculty, PhD and graduate student research (e.g. conducting a literature review).</li>
        <li>Providing support for publication, exhibits, etc.</li>
        <li>Providing long term support (e.g. interactions involving several email exchanges on the same topic).</li>
      </ul>
      </div>
    </div>
  </div>
<!-- Presentations participants -->    
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title" style="color:#8f001a">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        Nombre de participants aux présentation de groupe - Number of participants in group presentations</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
    Indiquez le nombre total de participants aux séances d’information(SI). (SI: programmes structurés de formation en bibliographie, 
    SI planifiées, séances d’orientation et visites guidées. Les SI de groupe peuvent être organisées pour offrir une formation en bibliographie
    ou à des fins culturelles, récréatives ou éducatives.) Les SI se déroulant à la bibliothèque ainsi qu’à l’extérieur de celle-ci doivent être 
    comptées si elles sont organisées par la Bibliothèque.<br/><br/>
    Compter chaque personne une seule fois, même dans le cas des cours à inscription continue s’échelonnant sur plusieurs séances.<br/><br/>
    Les formations individuelles doivent être comptées comme « questions de références » et non comme SI. (Note : Si une personne
    atelier de recherche inscrit à l’horaire, cela est considéré comme une SI. Mais, si un ou quelques personnes se rendent à votre bureau pour vous poser 
    des questions, cela est considéré comme une demande de renseignements, peu importe la durée de la consultation.)<br/><br/>
    Sont exclus : Les rencontres organisées dans les salles de réunion de la Bibliothèque par d’autres groupes ou les séances de formation pour le 
    personnel de la Bibliothèque. L’objectif de ce compte rendu est de recueillir de l’information sur les services qu’offre la Bibliothèque à sa clientèle.
     <hr>
     Report the total number of participants attending the presentations. (Presentations: formal bibliographic instruction programs and planned class 
     presentations, orientation sessions, and tours. Presentations to groups may be for either bibliographic instruction, cultural, recreational, 
     or educational purposes). Presentations both on and off the premises should be included as long as they are sponsored by the library.<br/><br/>
     For multi-session classes with a constant enrolment, count each person only once.<br/><br/>
     Personal one-to-one instruction should be counted as reference transaction, not a presentation. (Note: If one person attends a scheduled research workshop, 
     a presentation. If one (of a few) people stop by your office with questions, it counts as a reference transaction, regardless of how much time it takes.)<br/><br/>
     Do not include:  meetings sponsored by other groups using library meeting rooms or training for library staff. The purpose of this question is to capture 
     information about the services the library provides for its clientele.
      </div>
    </div>
  </div>
  <!-- Presentations -->
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title" style="color:#8f001a">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        Nombre de présentations de groupe - Number of group presentations</a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body">
      Indiquez le nombre total de séances d’information (SI) données durant l’année dans le cadre de programmes structurés de formation
      en bibliographie, de SI planifiées, de séances d’orientation et de visites guidées. Si la Bibliothèque organise des cours 
      s’échelonnant sur plusieurs séances ou des cours avec crédits qui ont lieu à plusieurs reprises durant la session, il faut compter
      chaque séance.<br/><br/>
      Les SI de groupe peuvent être organisées pour offrir une formation en bibliographie ou à des fins culturelles, récréatives ou 
      éducatives. Les SI se déroulant à la bibliothèque ainsi qu’à l’extérieur de celle-ci doivent être comptées si elles sont 
      organisées par la Bibliothèque.<br/><br/>
      Sont exclus : Les rencontres organisées dans les salles de réunion de la Bibliothèque par d’autres groupes ou les séances de 
      formation pour le personnel de la Bibliothèque. L’objectif de ce compte rendu est de recueillir de l’information sur les services 
      qu’offre la Bibliothèque à sa clientèle.
     <hr>
     Report the total number of sessions during the year of presentations made as part of formal bibliographic instruction programs and 
     through other planned class presentations, orientation sessions, and tours. If the library sponsors multi-session or credit courses 
     that meet several times over the course of a semester, each session should be counted.<br/><br/>
     Presentations to groups may be for either bibliographic instruction, cultural, recreational, or educational purposes. Presentations 
     both on and off the premises should be included as long as they are sponsored by the library.<br/><br/>
     Do not include:  meetings sponsored by other groups using library meeting rooms or training for library staff. 
     The purpose of this question is to capture information about the services the library provides for its clientele.
      </div>
    </div>
  </div>
    <!-- EZproxy session 30 minutes inactivity -->
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title" style="color:#8f001a">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
        EZproxy login expires after 30 minutes of inactivity</a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body">
    Text goes here - A suivre!
      </div>
    </div>
  </div>
<!-- Reset location cookie -->
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title" style="color:#8f001a">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
        Reset your location cookie?</a>
      </h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse">
      <div class="panel-body">
    Text goes here - A suivre!
      </div>
    </div>
  </div>
  <!---->
</div> <!-- end if accordion div -->
</div> <!-- end if col-md-10 -->

@endsection
