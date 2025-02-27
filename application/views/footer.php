<style>
	html, body {
	    max-width: 100%;
	    overflow-x: hidden;
	}
	.payment-logo {
	    width: 50%;
	    margin: 0 auto;
	}
	.payment-logo>ul {
	    display: flex;
	    margin: 0 auto;
	    justify-content: center;
	    align-items: center;
	    flex-wrap: wrap;
	    list-style: none;
	}
	.mr-1 {
	    margin-right: 0.25rem !important;
	}
	li {
	    display: list-item;
	    text-align: -webkit-match-parent;
	}
	.payment-logo>ul {
	    display: flex;
	    margin: 0 auto;
	    justify-content: center;
	    align-items: center;
	    flex-wrap: wrap;
	    list-style: none;
	}
	footer {
	    background: var(--primary-color);
	    margin-top: 2rem;
	    padding-top: 3rem;
	    border-top: 6px solid rgb(255, 223, 27);
	}

	.payment-logo {
	    width: 50%;
	    margin: 0 auto;
	}

	.payment-logo>ul {
	    display: flex;
	    margin: 0 auto;
	    justify-content: center;
	    align-items: center;
	    flex-wrap: wrap;
	    list-style: none;
	}

	.footer-content {
	    font-size: 10px;
	    width: 50%;
	    text-align: center;
	    margin: 0 auto;
	    padding: 1rem 0rem;
	    color: white;
	}

	.section-title {
	    font-weight: 400;
	    text-align: center;
	    padding: 8px 0;
	    background: var(--primary-color);
	    color: white;
	    font-size: 15px;
	}

</style>

<style>
	/* BASE CSS START */
	a {
		transition: 0.3s;
		color: #212529;
	}

	a:hover {
		color: #F4E849;
	}

	body {
		background: #081f31;
		scrollbar-color: #23507c #f1f1f1;
	}

	/* Track */
	body::-webkit-scrollbar-track {
		background: #f1f1f1;
	}

	/* Handle */
	body::-webkit-scrollbar-thumb {
		background: #23507c;
	}

	/* Handle on hover */
	body::-webkit-scrollbar-thumb:hover {
		background: #4684b4;
	}

	/* ----------------------- */
	/* width */
	.custom-scrollbar-1,
	.custom-scrollbar-2,
	.custom-scrollbar-3,
	.custom-scrollbar-4,
	.live-in-play-carousel-parent,
	.registration-area-step-1 .rs-body,
	.chatbox-body,
	.live-support-form-input-wrapper,
	* {
		scrollbar-color: #23507c #082234;
	}

	/* Track */
	::-webkit-scrollbar-track {
		background: #082234;
	}

	/* Handle */
	::-webkit-scrollbar-thumb {
		background: #23507c;
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
		background: #23507c;
	}

	.custom-scrollbar-5 {
		scrollbar-color: #ddd #fff;
	}

	.betslip-item-list {
		scrollbar-color: #fff #ddd;
	}

	.custom-scrollbar-5::-webkit-scrollbar-track {
		background: #fff;
	}

	.custom-scrollbar-5::-webkit-scrollbar-thumb {
		background: #ddd;
	}

	.custom-scrollbar-5::-webkit-scrollbar-thumb:hover {
		background: #ccc;
	}

	.betslip-item-list::-webkit-scrollbar-track {
		background: #ddd;
	}

	.betslip-item-list::-webkit-scrollbar-thumb {
		background: #fff;
	}

	.betslip-item-list::-webkit-scrollbar-thumb:hover {
		background: #fff;
	}

	.purple-megenta-bg-gradient {
		background: #051937;
		background: -webkit-linear-gradient(45deg, #21435a 0%, #23507c 25%, #23507c 50%, #4672b4 75%, #4684b4d9 100%);
		background: -webkit-linear-gradient(45deg, #21435a 0%, #23507c 25%, #23507c 50%, #4672b4 75%, #4684b4d9 100%);
		background: -webkit-linear-gradient(45deg, #21435a 0%, #23507c 25%, #23507c 50%, #4672b4 75%, #4684b4d9 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#082234', endColorstr='#5FA991', GradientType=1);
	}

	/* BASE CSS END */
	/* HEADER AREA CSS START */
	.header-area {
		border-color: #4d80b9;
		background: rgb(99, 154, 195);
		background: -moz-linear-gradient(top, rgba(99, 154, 195, 1) 0%, rgba(0, 58, 102, 1) 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(99, 154, 195, 1)), color-stop(100%, rgba(0, 58, 102, 1)));
		background: -webkit-linear-gradient(top, rgba(99, 154, 195, 1) 0%, rgba(0, 58, 102, 1) 100%);
		background: -o-linear-gradient(top, rgba(99, 154, 195, 1) 0%, rgba(0, 58, 102, 1) 100%);
		background: -ms-linear-gradient(top, rgba(99, 154, 195, 1) 0%, rgba(0, 58, 102, 1) 100%);
		background: linear-gradient(to bottom, rgba(99, 154, 195, 1) 0%, rgba(0, 58, 102, 1) 100%);
		/*filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#639ac3', endColorstr='#003a66', GradientType=0);*/
		color: #fff;
		/* border-bottom-color: #F4E849; */
	}

	.header-bottom-border {
		background: #F4E849;
	}

	.main-menu ul li a {
		color: #fff;
	}

	.main-menu ul li ul {
		background: #fff;
		color: #333;
	}

	.main-menu ul li ul li a {
		color: #333b80;
		border-bottom-color: #ddd;
	}

	.main-menu ul li a:hover,
	.main-menu ul li.active a,
	.main-menu ul li ul li.active a,
	.main-menu ul li.active ul li:not(.active) a:hover {
		color: #F4E849;
	}

	.main-menu ul li.active ul li:not(.active) a {
		color: #30bb1c;
	}

	.main-menu ul li ul:before {
		border-bottom-color: #fff;
	}

	.sign-up-area a,
	.sign-up-area span {
		color: #fff;
		border-color: transparent;
	}

	.sign-up-area a.sign-in:hover,
	.sign-up-area span.sign-in:hover,
	.sign-up-area.show span.sign-in {
		color: #F4E849;
	}

	.language-list .btn {
		background: transparent;
	}

	.language-list .dropdown-menu li:hover {
		background: #104980;
	}

	/* HEADER AREA CSS END */
	/* COMPANY LOGO AREA CSS START */
	.company-logo {
		background: #082234;
	}

	/* COMPANY LOGO AREA CSS END */
	/* FOOTER AREA CSS START */
	.footer-area {
		background: linear-gradient(to top, #082234de 0%, rgba(0, 0, 0, 0) 100%), linear-gradient(to bottom, #25405b 0%, rgba(0, 0, 0, 0) 30%)
	}
	.footer-area-bottom {
		background: linear-gradient(to top, #4684b47a 0%, rgba(0, 0, 0, 0) 100%), linear-gradient(to bottom, #23507c 0%, rgba(0, 0, 0, 0) 30%);
	}

	.footer-links h3, h6,
	.mobile-apps h3, h6,
	.follow-us h3, h6{
		color: #fff;
	}

	.footer-links ul li a {
		font-size: 15px;
		color: #fff;
	}

	.footer-links ul li a:hover {
		color: #F4E849;
	}

	.follow-us ul li a {
		color: #fff;
	}

	.follow-us ul li a:hover {
		color: #F4E849;
	}

	.eighteen-plus h2 {
		color: #fff;
	}

	.eighteen-plus p {
		color: #fff;
	}

	/* FOOTER AREA CSS END */
	/* COPYRIGHT AREA CSS START */
	.copyright-text {
		color: #fff;
	}

	.copyright-area {
		background: rgba(4, 39, 28, 0.9);
	}

	/* COPYRIGHT AREA CSS END */
	/* LEFT SIDEBAR AREA CSS START */
	.game-content-area,
	.admin-template-area {
		background: #081f31;
	}

	.left-sidebar-toggle-btn-area {
		background: #23507c;
	}

	.left-sidebar-tab-search-wrapper {
		background: #23507c;
	}

	.left-sidebar-tab-links ul li {
		background: #113756db;
	}

	.left-sidebar-tab-links ul li a {
		color: #fff !important;
	}

	.left-sidebar-tab-links ul li a.active {
		background: #4684b4;
	}

	.left-sidebar-search-area {
		background: #fff;
	}

	.favourite-card {
		color: #fff;
		background: #23507c;
	}

	.favourite-card-body {
		background: #f9f9f9;
		color: #717479;
	}

	.sport-card-level-one {
		background: #0f335099;
	}

	.sport-card-level-one-header {
		border-left-color: #23507c;
	}

	.sport-card-level-one-header.active-col {
		color: #ffffff;
		border-left-color: #23507c;
	}

	.sport-card-level-one-body {
		background: #ffffff;
		border: 3px solid #ffffff;
	}

	.sport-card-level-two-header {
		background: #ffffff;
	}

	.sport-card-level-two-body {
		background: #ffffff;
	}

	.sport-card-level-three {
		background: #ffffff;
	}

	.sport-card-level-three-header .float-right {
		color: #ffc536;
	}

	.sport-card-level-three-header ul li:last-child .float-right {
		color: #aeb0b3;
	}

	.sport-card-level-three-header button {
		color: #aeb0b3;
	}

	.sport-card-level-three-header .status {
		color: #333b80;
	}

	.sport-card-level-three-body {
		border-top-color: #c9c9c9;
	}

	.sport-card-level-three-body .row .col {
		border-right-color: #c9c9c9;
	}

	.single-bet-box .goal-point {
		color: #014a85;
	}

	.single-bet-box.green .goal-point {
		color: #6fad4b;
	}

	.single-bet-box.red .goal-point {
		color: #dd563b;
	}

	.single-bet-box.green:before {
		border-top-color: #6fad4b;
	}

	.single-bet-box.red:before {
		border-bottom-color: #dd563b;
	}

	.sport-card-level-three-header:hover,
	.single-bet-box:hover {
		background: #c9c9c9;
	}

	.sport-card-level-three-header:hover *,
	.single-bet-box:hover * {
		color: #444 !important;
	}

	.sport-card-level-two-header:hover,
	.sport-card-level-two-header.active {
		color: #23507c;
	}

	.sport-card-level-one .sport-card-level-one-header {
		border-color: #23507c;
	}

	.sport-card-level-one .sport-card-level-one-header:hover,
	.sport-card-level-one .sport-card-level-one-header[aria-expanded="true"],
	.sport-card-level-one .sport-card-level-one-header.active {
		color: #fff;
		background: #113756db;
	}

	.sport-card-level-one.green .sport-card-level-one-header {
		border-color: rgba(44, 44, 88, 0.62);
	}

	.sport-card-level-one.green .sport-card-level-one-header:hover,
	.sport-card-level-one.green .sport-card-level-one-header[aria-expanded="true"],
	.sport-card-level-one.green .sport-card-level-one-header.active {
		color: #fff;
		background: rgba(44, 44, 88, 0.62);
	}

	.sport-card-level-one.purple .sport-card-level-one-header {
		border-color: #473067;
	}

	.sport-card-level-one.purple .sport-card-level-one-header:hover,
	.sport-card-level-one.purple .sport-card-level-one-header[aria-expanded="true"],
	.sport-card-level-one.purple .sport-card-level-one-header.active {
		color: #fff;
		background: #473067;
	}

	.sport-card-level-one.megenta .sport-card-level-one-header {
		border-color: #a61f67;
	}

	.sport-card-level-one.megenta .sport-card-level-one-header:hover,
	.sport-card-level-one.megenta .sport-card-level-one-header[aria-expanded="true"],
	.sport-card-level-one.megenta .sport-card-level-one-header.active {
		color: #fff;
		background: #a61f67;
	}

	.sport-card-level-one.black .sport-card-level-one-header {
		border-color: #1b1b1b;
	}

	.sport-card-level-one.black .sport-card-level-one-header:hover,
	.sport-card-level-one.black .sport-card-level-one-header[aria-expanded="true"],
	.sport-card-level-one.black .sport-card-level-one-header.active {
		color: #fff;
		background: #1b1b1b;
	}

	.sport-card-level-one.orange .sport-card-level-one-header {
		border-color: #d96c23;
	}

	.sport-card-level-one.orange .sport-card-level-one-header:hover,
	.sport-card-level-one.orange .sport-card-level-one-header[aria-expanded="true"],
	.sport-card-level-one.orange .sport-card-level-one-header.active {
		color: #fff;
		background: #d96c23;
	}

	.sport-card-level-one.blue .sport-card-level-one-header {
		border-color: #1489ac;
	}

	.sport-card-level-one.blue .sport-card-level-one-header:hover,
	.sport-card-level-one.blue .sport-card-level-one-header[aria-expanded="true"],
	.sport-card-level-one.blue .sport-card-level-one-header.active {
		color: #fff;
		background: #1489ac;
	}

	/* LEFT SIDEBAR AREA CSS END */
	/* RIGHT SIDEBAR AREA CSS START */
	.game-preview-card-header {
		background: #23507c;
		color: #f9f9f9;
	}

	.game-preview-card-body {
		background: #23507c;
		border-top-color: #082234;
	}

	.team-name {
		color: #c9c9c9;
	}

	.team-score {
		background: #3f444e;
		color: #c9c9c9;
	}

	.game-current-time {
		background: #2f366b;
		color: #fff;
	}

	.game-status {
		background: rgba(0, 0, 0, 0.4);
		color: #fff;
	}

	.game-status .right-side:before {
		background: #fff;
	}

	.event-header {
		background: #ffffff;
		color: #202531;
	}

	.event-header a {
		color: #202531;
	}

	.event-header a:hover {
		color: #4684b4;
	}

	.event-type-list {
		background: #23507c;
	}

	.single-event-type-list-item {
		background: #ffffff;
		border-top-color: #4684b4;
	}

	.single-event-type-list-item.active,
	.single-event-type-list-item:hover {
		background: #4684b4;
		color: #fff;
	}

	.single-event-type-list-item.green {
		border-color: #11376d;
	}

	.single-event-type-list-item.green.active,
	.single-event-type-list-item.green:hover {
		color: #fff;
		background: #183366;
	}

	.single-event-type-list-item.purple {
		border-color: #473067;
	}

	.single-event-type-list-item.purple.active,
	.single-event-type-list-item.purple:hover {
		color: #fff;
		background: #473067;
	}

	.single-event-type-list-item.megenta {
		border-color: #a61f67;
	}

	.single-event-type-list-item.megenta.active,
	.single-event-type-list-item.megenta:hover {
		color: #fff;
		background: #a61f67;
	}

	.single-event-type-list-item.black {
		border-color: #1b1b1b;
	}

	.single-event-type-list-item.black.active,
	.single-event-type-list-item.black:hover {
		color: #fff;
		background: #1b1b1b;
	}

	.single-event-type-list-item.orange {
		border-color: #d96c23;
	}

	.single-event-type-list-item.orange.active,
	.single-event-type-list-item.orange:hover {
		color: #fff;
		background: #d96c23;
	}

	.single-event-type-list-item.blue {
		border-color: #1489ac;
	}

	.single-event-type-list-item.blue.active,
	.single-event-type-list-item.blue:hover {
		color: #fff;
		background: #1489ac;
	}

	.event-time {
		background: #fff;
	}

	.single-event-time {
		color: #1E2531;
	}

	.single-event-time:hover {
		color: #4684b4;
	}

	.single-event-time:not(last-item) {
		border-right-color: #ccc;
	}

	.single-event-time.active {
		background: #4684b4;
		color: #fff;
	}

	.event-card-header {
		background: #fff;
	}

	.event-card-body {
		background: #dfdfdf;
	}

	.event-info .time {
		color: #555;
	}

	.event-info .count a {
		color: #212529;
		border-color: #212529;
	}

	.event-info .count a:hover {
		background: #212529;
		color: #fff;
	}

	.event-info .count.red a {
		color: #a61d67;
		border-color: #a61d67;
	}

	.event-info .count.red a:hover {
		background: #a61d67;
		color: #fff;
	}

	.event-info .count.green a {
		color: #14732f;
		border-color: #14732f;
	}

	.event-info .count.green a:hover {
		background: #14732f;
		color: #fff;
	}

	.event-info .stat a:hover {
		color: #444;
	}

	.event-list ul li {
		background: #fff;
	}

	.event-list ul li span.coefficient {
		color: #014a85;
	}

	.event-list ul li:hover {
		background: #c9c9c9;
	}

	.event-list ul li.active {
		background: #4684b4;
		color: #fff;
	}

	.event-list ul li.active span.coefficient,
	.event-list ul li.active:hover span.coefficient {
		color: #fff;
	}

	.event-list ul li:hover span.coefficient {
		color: #212529;
	}

	.round-chart .left-value,
	.round-chart .right-value {
		color: #c9c9c9;
	}

	.statistics-name {
		color: #c9c9c9;
	}

	.cricket-match-summary-carousel.owl-carousel,
	.cricket-match-summary-details,
	.cricket-match-summary-details .match-details-info .team-score {
		background: transparent;
	}

	.cricket-match-summary-carousel .owl-nav button {
		background: #4684b4 !important;
		color: #fff !important;
	}

	.cricket-match-summary-header {
		background: rgba(5, 58, 41, 0.85);
		color: #fff;
	}

	.green .cricket-match-summary-header {
		background: #4d6bc0;
		color: #fff;
	}

	.black .cricket-match-summary-header {
		background: #252525;
		color: #fff;
	}

	.cricket-match-summary-header span.match-type {
		background: #113756db;
	}

	.green .cricket-match-summary-header span.match-type {
		background: #4d6bc0;
	}

	.black .cricket-match-summary-header span.match-type {
		background: #4b4b4b;
	}

	.cricket-match-summary-details {
		color: #fff;
	}

	.cricket-match-summary-details span.team-name-flag .name {
		color: #fff;
	}

	.cricket-match-summary-details .match-details-info .team-score {
		color: #fff;
	}

	.cricket-match-summary .match-location ul li:before {
		background: transparent;
	}

	.cricket-match-summary-details .match-details-info .team-score .bottom {
		color: #fff;
	}

	.cricket-match-summary-details .won span.team-name-flag .name,
	.cricket-match-summary-details .match-details-info .won .team-score,
	.cricket-match-summary-details .match-details-info .won .team-score .bottom {
		color: #fff;
	}

	/* football match summary css */
	.football-match-summary-carousel.owl-carousel {
		background: #f4f4f4;
	}

	.football-match-summary-carousel .owl-nav button {
		background: #4684b4 !important;
		color: #fff !important;
	}

	.football-match-summary {
		background: #f4f4f4;
		color: #666;
	}

	.football-match-summary:hover {
		color: #444;
	}

	.football-match-summary .match-details-info .team-score {
		color: #666;
	}

	.football-match-summary .won *,
	.football-match-summary .match-details-info .won .team-score {
		color: #1e2531;
	}

	/* RIGHT SIDEBAR AREA CSS END */
	/* GAME AREA CSS START */
	.live-in-play-header {
		background: #4684b4;
		color: #fff;
	}

	.live-in-play-header.green {
		background: #00a651;
	}

	.live-in-play-header.purple {
		background: #473067;
	}

	.live-in-play-header.megenta {
		background: #a61f67;
	}

	.live-in-play-header.black {
		background: #1b1b1b;
	}

	.live-in-play-header.orange {
		background: #d96c23;
	}

	.live-in-play-header.blue {
		background: #1489ac;
	}

	.live-in-play-carousel-parent {
		background: #23507c;
	}

	.simplebar-scrollbar::before {
		background: #fff;
	}

	.drag-left-handle,
	.drag-right-handle {
		color: #888;
		background: rgba(255, 255, 255, 0.8);
	}

	.drag-right-handle {
		box-shadow: inset 1px 0px 5px 0px #555;
	}

	.live-in-play-carousel {
		background: #23507c;
	}

	.live-in-play-carousel-item {
		background: #23507c;
	}

	.live-in-play-carousel-item img {
		/* box-shadow: 0 0 5px #555;
		background: #ddd; */
		filter: grayscale(1);
	}

	.live-in-play-carousel-item p {
		color: #F4E849;
		filter: grayscale(1);
	}

	.live-in-play-carousel-item.active,
	.live-in-play-carousel-item:hover {
		background: #4684b4;
		color: #F4E849;
	}

	.live-in-play-carousel-item.active img,
	.live-in-play-carousel-item.active p,
	.live-in-play-carousel-item.active:hover img,
	.live-in-play-carousel-item.active:hover p {
		filter: grayscale(0);
	}

	.live-in-play-carousel-item:hover img,
	.live-in-play-carousel-item:hover p {
		filter: grayscale(.9);
	}


	.green .live-in-play-carousel-item.active,
	.green .live-in-play-carousel-item:hover {
		background: #00a651;
		color: #fff;
	}

	.purple .live-in-play-carousel-item.active,
	.purple .live-in-play-carousel-item:hover {
		background: #473067;
		color: #fff;
	}

	.megenta .live-in-play-carousel-item.active,
	.megenta .live-in-play-carousel-item:hover {
		background: #a61f67;
		color: #fff;
	}

	.black .live-in-play-carousel-item.active,
	.black .live-in-play-carousel-item:hover {
		background: #1b1b1b;
		color: #fff;
	}

	.orange .live-in-play-carousel-item.active,
	.orange .live-in-play-carousel-item:hover {
		background: #d96c23;
		color: #fff;
	}

	.blue .live-in-play-carousel-item.active,
	.blue .live-in-play-carousel-item:hover {
		background: #1489ac;
		color: #fff;
	}

	.live-in-play-carousel-item.active p,
	.live-in-play-carousel-item:hover p {
		color: #F4E849;
	}

	.single-match-result-accordion-header {
		background: #23507c;
		border-bottom-width: 1px;
		border-bottom-style: solid;
	}

	.single-match-result-accordion-game-header {
		/*background: #4988b9;*/
		background: #d0bdbd99;
		margin-top: 5px;
		border-bottom-width: 1px;
		border-bottom-style: solid;
		font-size: 14px;
		cursor: pointer;
		border-radius: 0;
		transition: 0.3s;
		display: flex;
		align-items: center;
		padding-left: 10px;
		padding-right: 0;
		color: #FFF;

	}

	.single-match-result-accordion-header.collapsed {
		border-bottom: 1px solid #081f31;
	}

	.single-match-result-accordion-header .right-side,
	.single-match-result-accordion-header .right-side a {
		color: #fff;
	}

	.single-match-result-accordion-header .favourite-action {
		color: #aeb0b3;
	}

	.single-match-result-accordion-header .status {
		color: #fff !important;
	}

	.single-match-result-accordion-header .status:hover {
		color: #fff !important;
	}

	.single-match-result {
		background: #375165;
	}

	.single-match-result-header {
		border-color: #4d80b9;
		background: rgb(99, 154, 195);
		background: -moz-linear-gradient(top, rgba(99, 154, 195, 1) 0%, rgba(0, 58, 102, 1) 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(99, 154, 195, 1)), color-stop(100%, rgba(0, 58, 102, 1)));
		background: -webkit-linear-gradient(top, rgba(99, 154, 195, 1) 0%, rgba(0, 58, 102, 1) 100%);
		background: -o-linear-gradient(top, rgba(99, 154, 195, 1) 0%, rgba(0, 58, 102, 1) 100%);
		background: -ms-linear-gradient(top, rgba(99, 154, 195, 1) 0%, rgba(0, 58, 102, 1) 100%);
		background: linear-gradient(to bottom, rgba(99, 154, 195, 1) 0%, rgba(0, 58, 102, 1) 100%);
		color: #fff;
	}

	.single-match-result-header .current-time {
		color: #fff;
	}

	.single-match-result-header .left-side span {
		color: #fff;
	}

	.single-match-result-header .left-side:hover span {
		color: #ddd;
	}

	.single-match-result-accordion-btn {
		border-left-color: #23507c;
	}

	.single-match-result-accordion-header .right-side a:hover,
	.single-match-result-accordion-header .favourite-action:hover,
	.single-match-result-accordion-header .favourite-action.active {
		color: #F4E849;
	}

	.single-match-result-accordion-header .favourite-action.active {
		color: #222;
	}

	.single-match-result-accordion-header .right-side a.bet-cash-out {
		background: #014a85;
		color: #fff;
		box-shadow: 0 0 0 1px #ddd, 0 0 0 2px #014a85;
	}

	.single-match-result-accordion-header .right-side a.match-event-link span {
		color: #fff;
	}

	.single-match-result-accordion-header .right-side a.match-event-link span:hover {
		color: #F4E849;
	}

	/* .single-match-result-accordion-body .row .col {
	    border-right-color: #c9c9c9;
	    border-top-color: #c9c9c9;
	} */
	.single-match-result-accordion-body .row .col:last-child,
	.single-match-result-accordion-body .row .col-lg-4:nth-child(3n + 3),
	.single-match-result-accordion-body .row .col-lg-6:nth-child(2n),
	.single-match-result-accordion-body .row .col-lg-3:nth-child(4n + 1) {
		border-right-color: none;
	}

	.single-match-result-box {
		background: #fff;
		border-top: 1px solid rgba(5, 45, 32, 0.3);
		border-right: 1px solid rgba(5, 45, 32, 0.3);
	}

	.single-match-result-box .match-name {
		color: #333333;
	}

	.single-match-result-box .match-point {
		color: #222;
	}

	.single-match-result-box.green .match-point {
		color: #113756db;
	}

	.single-match-result-box.red .match-point {
		color: #dd563b;
	}

	.single-match-result-box.green:before {
		border-top-color: #113756db;
	}

	.single-match-result-box.red:before {
		border-bottom-color: #dd563b;
	}

	/* .single-match-result-box:hover {
	  background: #efefef;
	} */
	.single-match-result-box:hover * {
		color: #444 !important;
	}

	[data-balloon]:after,
	[data-balloon]::before {
		background: rgba(17, 17, 17, 0.66);
	}

	[data-balloon][data-balloon-pos="left"]:hover:before,
	[data-balloon][data-balloon-pos="left"][data-balloon-visible]:before {
		opacity: 0.72;
	}

	/* GAME AREA CSS END */
	/* COLLAPS ACTION CSS START */
	.left-sidebar,
	.game-area,
	.right-sidebar,
	.admin-content {
		background: transparent;
	}

	.game-indicator-message {
		color: #fff;
	}

	.collaps-active .left-sidebar-search-area i.fas.fa-search {
		color: #fff;
	}

	.collaps-active .left-sidebar-search-area {
		background: transparent;
	}

	.game-summery-popup-area {
		background: #dfdfdf;
		border-color: #23507c;
		color: #1e2531;
	}

	.game-summery-popup-area.active {
		display: block;
	}

	.game-summery-popup-header {
		background: #23507c;
		color: #fff;
	}

	.game-summery-popup-header:before {
		border-right-color: #23507c;
	}

	.game-summery-popup-body .favourite-text {
		color: #333;
	}

	.game-summery-popup-body .favourite-text i.fas {
		color: #888;
	}

	.game-summery-popup-body .search-collapsed-area {
		background: #fff;
	}

	.game-summery-popup-body .search-collapsed-area input[type="search"],
	.game-summery-popup-body .search-collapsed-area input[type="text"] {
		background: #fff;
	}

	.game-list {
		background: #fff;
	}

	.game-list ul li {
		border-top-color: #ccc;
	}

	.game-list ul li:hover {
		background: #f3f3f3;
	}

	.game-list span.match-collapsed-score {
		color: #14732f;
	}

	.game-list .match-collapsed-details .favourite-action:hover {
		color: #333;
	}

	/* COLLAPS ACTION CSS END */
	/* BETSLIP AREA CSS START */
	.betslip-card {
		background: #dfdfdf;
	}

	.betslip-card-header {
		background: #23507c;
		border-top-color: #F4E849;
		color: #fff;
	}

	span.betslip-card-header-text .number {
		background: #F4E849;
		color: #212529;
	}

	.betslip-actions {
		background: #f5f5f5;
	}

	.betslip-action-list .form-control {
		background: #dfdfdf;
	}

	span.red-icon-tooltip {
		border-color: #e44a3f;
		background: #f5f5f5;
	}

	.red-mark-ban-icon:before {
		border-top-color: #e44a3f;
	}

	.single-betlist-item:first-child .red-mark-ban-icon:before {
		border-bottom-color: #e44a3f;
	}

	span.red-icon-tooltip .tooltip-top-part {
		background: #e44a3f;
		color: #fff;
	}

	span.info-icon-tooltip {
		background: #dfdfdf;
		box-shadow: 0px 1px 2px #aaa;
		border-color: #ccc;
	}

	span.info-icon-tooltip .tooltip-top-part {
		background: #14732f;
		color: #fff;
	}

	span.info-icon-tooltip .tooltip-top-part:before {
		border-left-color: #14732f;
	}

	.green span.info-icon-tooltip .tooltip-top-part {
		background: #14732f;
	}

	.green span.info-icon-tooltip .tooltip-top-part:before {
		border-left-color: #14732f;
	}

	.purple span.info-icon-tooltip .tooltip-top-part {
		background: #473067;
	}

	.purple span.info-icon-tooltip .tooltip-top-part:before {
		border-left-color: #473067;
	}

	.megenta span.info-icon-tooltip .tooltip-top-part {
		background: #a61f67;
	}

	.megenta span.info-icon-tooltip .tooltip-top-part:before {
		border-left-color: #a61f67;
	}

	.black span.info-icon-tooltip .tooltip-top-part {
		background: #1b1b1b;
	}

	.black span.info-icon-tooltip .tooltip-top-part:before {
		border-left-color: #1b1b1b;
	}

	.orange span.info-icon-tooltip .tooltip-top-part {
		background: #d96c23;
	}

	.orange span.info-icon-tooltip .tooltip-top-part:before {
		border-left-color: #d96c23;
	}

	.blue span.info-icon-tooltip .tooltip-top-part {
		background: #1489ac;
	}

	.blue span.info-icon-tooltip .tooltip-top-part:before {
		border-left-color: #1489ac;
	}

	span.betlist-info-icon i.fas,
	.red-mark-ban-icon i.fas,
	.betlist-single-item-remove-icon i.fas {
		color: #23507c;
	}

	.betslip-item-list-v2 .single-betlist-item.colored-header .betlist-single-item-remove-icon i.fas {
		color: #F4E849;
	}

	span.betlist-info-icon i.fas:hover,
	.red-mark-ban-icon i.fas:hover {
		color: #333;
	}

	.betlist-single-item-remove-icon i.fas:hover {
		color: #e44a3f;
	}

	.single-betlist-item .bottom-part {
		background: #f5f5f5;
		border-color: #ccc;
	}

	.single-result-item .blue {
		color: #014a85;
	}

	.single-result-item .down-icon {
		color: #F4E849;
	}

	.single-result-item .up-icon {
		color: #14732f;
	}

	.betslip-bid-area ul li input[type="text"] {
		background: #fff;
	}

	.betslip-bid-area {
		background: #081f31;
	}

	.betslip-bid-area ul li .blue {
		color: #082234;
	}

	.betslip-bid-area ul li:last-child {
		border-top-color: #dcdcdc;
	}

	.betslip-actions.betslip-message h5.bet-range-message {
		color: #23507c;
	}

	.place-bet-btn,
	.accept-changes-btn {
		background: #4684b4;
		color: #fff;
	}

	.accept-changes-btn {
		background: #4684b4;
	}

	.accept-changes-btn:hover {
		background: #23507c;
	}

	.accept-changes-btn.inactive {
		background: #5FA991;
		cursor: default;
	}

	.accept-changes-btn.inactive:hover {
		background: #4684b4;
	}

	span.button-tooltip {
		background: #999a9c;
		color: #ddd;
	}

	span.button-tooltip a {
		color: #ddd;
	}

	span.button-tooltip:before {
		border-top-color: #999a9c;
	}

	/* BETSLIP AREA CSS END */
	/* REGISTRATION SIGN IN AREA CSS START */
	/****  floating-Lable style start ****/
	.floating-input,
	.floating-textarea,
	.floating-select {
		background-color: #fff;
		border-color: #fff;;
	}

	.floating-input.form-control.empty {
		border-color: #ff4545;
	}

	.floating-input:focus,
	.floating-textarea:focus,
	.floating-select:focus,
	.floating-input:focus,
	.floating-label.control-focus .floating-input:focus,
	.floating-textarea:focus,
	.floating-label.control-focus .floating-textarea:focus,
	.floating-select:focus,
	.floating-label.control-focus .floating-select:focus {
		/* box-shadow: 0 0 5px #ddd; */
		box-shadow: 0 0 0 0;
	}

	.floating-label label {
		color: #555;
	}

	/* animation */
	@-webkit-keyframes inputHighlighter {
		from {
			background: #5264ae;
		}
		to {
			width: 0;
			background: transparent;
		}
	}

	@-moz-keyframes inputHighlighter {
		from {
			background: #5264ae;
		}
		to {
			width: 0;
			background: transparent;
		}
	}

	@keyframes inputHighlighter {
		from {
			background: #5264ae;
		}
		to {
			width: 0;
			background: transparent;
		}
	}

	.registration-sign-in-area-overlay {
		background: #000;
	}

	.registration-area-step-1,
	.sign-in-area,
	.forgot-password-area {
		background: #efefef;
	}

	.rs-header {
		background: #23507c;
		color: #fff;
	}

	.rs-header .close {
		color: #fff;
	}

	.rs-submit input[type="submit"],
	.rs-submit button {
		background: #4684b4;
		color: #fff;
	}

	.rs-submit input[type="submit"]:hover,
	.rs-submit button:hover {
		background: #23507c;
	}

	.rs-other-info .rs-link {
		color: #4684b4;
	}

	.rs-other-info .rs-sign-in-link:hover {
		color: #23507c;
	}

	.field-icon {
		color: #666;
	}

	/* REGISTRATION SIGN IN AREA CSS END */
	/* Sign IN CSS START */
	.sign-up-area {
		color: #fff;
		/* box-shadow: 0 0 10px #777; */
	}

	button.btn.btn-primary.sign-in-btn {
		color: #111;
		background: #F4E849;
	}

	button.btn.btn-primary.sign-in-btn:hover {
		background: #eecf03;
	}

	.sign-up-area .rs-other-info .rs-link {
		color: #fff;
	}

	.sign-up-area .rs-other-info .rs-link.rs-reg-link {
		color: #F4E849;
	}

	.sign-up-area .rs-other-info .rs-link:hover {
		color: #F4E849;
	}

	.sign-up-area .rs-other-info .rs-link.rs-reg-link:hover {
		color: #eecf03;
	}

	.sign-up-area span.field-icon {
		color: #666;
	}

	.select2-dropdown {
		border-color: #ddd !important;
	}

	.select2-container--default .select2-selection--single .select2-selection__rendered {
		color: #555 !important;
	}

	.select2-container--default .select2-selection--single .select2-selection__arrow b {
		border-color: #666 transparent transparent transparent !important;
	}

	.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
		border-color: transparent transparent #666 transparent !important;
	}

	.rs-other-info.termes-policy a {
		color: #4684b4;
	}

	.rs-other-info.termes-policy a:hover {
		color: #23507c;
	}

	/* SIGN IN CSS END */
	/* LIVE SUPPORT CSS START */
	.live-support-icon {
		color: #082234;
	}

	.live-support-icon .icon {
		background: #F4E849;
	}

	.live-support-icon .icon:before {
		border-left-color: #F4E849;
	}

	.live-support-icon .text {
		background: #F4E849;
	}

	.live-support-icon:hover .icon {
		background: #082234;
		color: #F4E849;
	}

	.live-support-icon:hover .icon:before {
		border-left-color: #082234;
	}

	.live-support-content-header {
		color: #fff;
		border-bottom-color: rgba(255, 255, 255, .3);
	}

	.live-support-form-input-wrapper .floating-input,
	.live-support-form-input-wrapper .floating-textarea,
	.live-support-form-input-wrapper .floating-select {
		color: #fff;
		border-bottom-color: rgba(255, 255, 255, .8);
	}

	.live-support-form-input-wrapper .floating-input:focus,
	.live-support-form-input-wrapper .floating-textarea:focus,
	.live-support-form-input-wrapper .floating-select:focus {
		border-color: #fff;
		background: transparent;
		color: #fff;
	}

	.live-support-form-input-wrapper .floating-label label {
		color: #fff;
	}

	.live-support-form-input-wrapper .dropify-wrapper:hover {
		background-image: -webkit-linear-gradient(135deg, #23507c 25%, transparent 25%, transparent 50%, #23507c 50%, #23507c 75%, transparent 75%, transparent);
		background-image: linear-gradient(-45deg, #23507c 25%, transparent 25%, transparent 50%, #23507c 50%, #23507c 75%, transparent 75%, transparent);
	}

	.live-support-form-input-wrapper .dropify-wrapper {
		color: #fff;
		background-color: transparent;
		border-color: #E5E5E5;
	}

	.live-support-send-btn button {
		background: #333;
	}

	.live-support-send-btn button:hover {
		background: #333;
		color: #fff;
	}

	.live-support-send-btn button:before {
		background: #fff;
	}

	.admin-body .live-support-icon .icon:before {
		border-right-color: #F4E849;
	}

	.admin-body .live-support-icon:hover .icon:before {
		border-right-color: #082234;
	}

	/* LIVE SUPPORT CSS END */
	/* CHATBOX AREA CSS START */
	.chatbox-feedback .user-image img {
		background: #fff;
	}

	span.feedback-message {
		color: #fff;
	}

	span.feedback-icons button {
		background: transparent;
	}

	.chatbox-feedback {
		border-bottom-color: rgba(255, 255, 255, .3);
	}

	.chatbox-single-chat-user-image img {
		background: #fff;
	}

	.chatbox-single-chat-user-text {
		background: #fff;
	}

	.chatbox-single-chat-user-text .time {
		color: #f9f9f9;
	}

	.chatbox-single-chat-user-text:before {
		border-bottom-color: #fff;
	}

	.chatbox-form {
		border-top-color: rgba(255, 255, 255, .3);
	}

	.chatbox-form .dropify-wrapper:hover {
		background-image: -webkit-linear-gradient(135deg, #23507c 25%, transparent 25%, transparent 50%, #23507c 50%, #23507c 75%, transparent 75%, transparent);
		background-image: linear-gradient(-45deg, #23507c 25%, transparent 25%, transparent 50%, #23507c 50%, #23507c 75%, transparent 75%, transparent);
	}

	span.chatbox-textarea textarea {
		border-bottom-color: rgba(255, 255, 255, .7);
		color: #fff;
	}

	span.chatbox-submit button {
		background: none;
		color: #fff;
	}

	.chatbox-header {
		color: #eee;
		border-bottom-color: rgba(255, 255, 255, .3);
	}

	span.chatbox-header-user-icon img {
		background: #fff;
	}

	/* CHATBOX AREA CSS END */
	/****************************************
	            MATCH DETAILS PAGE CSS
	*****************************************/
	/* GAME VIEW BUTTON LIST CSS START */
	.game-view-btn-list-area ul {
		background: #eee;
	}

	.game-view-btn-list-area ul li {
		color: #1E2531;
		border-right-color: #bbb;
		border-top-color: #eee;
	}

	.game-view-btn-list-area ul li a {
		color: #1E2531;
	}

	.game-view-btn-list-area ul li:hover {
		background: #fff;
	}

	.game-view-btn-list-area ul li.active {
		border-top-color: #4684b4;
		background: #fff;
	}

	/* GAME VIEW BUTTON LIST AREA CSS END */
	/* GAME BANNER SUMMARY AREA CSS START */
	.game-banner-match-summary {
		background: #fff;
		box-shadow: 0 40px 30px -23px rgba(0, 0, 0, 0.75);
	}

	.game-banner-match-summary-inner .teams div:first-child {
		color: #fff;
	}

	.game-banner-match-summary-inner .game-info span:first-child {
		color: #fff;
	}

	.game-banner-match-summary-inner:before {
		background: #23507c;
	}

	.game-banner-match-summary-inner:after {
		background: #ddd;
	}

	/* GAME BANNER SUMMARY AREA CSS END */
	/* MATCH DETAILS GAME HEADER AREA CSS START */
	.match-details-game-header {
		background: #144d75;
		color: #fff;
	}

	.match-details-game-header.green {
		background: #14732F;
	}

	.match-details-game-header.purple {
		background: #473067;
	}

	.match-details-game-header.black {
		background: #1b1b1b;
	}

	.match-details-game-header.orange {
		background: #d96c23;
	}

	.match-details-game-header.blue {
		background: #1489ac;
	}

	/* MATCH DETAILS GAME HEADER AREA CSS END */
	/* MATCH DETAILS GAME TAB AREA CSS START */
	.nav.match-details-game-tab a {
		color: #333;
		background: #ccc;
		border-top-color: #ccc;
	}

	.nav.match-details-game-tab a:hover,
	.nav.match-details-game-tab a.active {
		background: #f9f9f9;
		border-top-color: #23507c;
	}

	.nav.match-details-game-tab.green a:hover,
	.nav.match-details-game-tab.green a.active {
		border-top-color: #14732f;
	}

	.nav.match-details-game-tab.purple a:hover,
	.nav.match-details-game-tab.purple a.active {
		border-top-color: #473067;
	}

	.nav.match-details-game-tab.megenta a:hover,
	.nav.match-details-game-tab.megenta a.active {
		border-top-color: #a61f67;
	}

	.nav.match-details-game-tab.black a:hover,
	.nav.match-details-game-tab.black a.active {
		border-top-color: #1b1b1b;
	}

	.nav.match-details-game-tab.orange a:hover,
	.nav.match-details-game-tab.orange a.active {
		border-top-color: #d96c23;
	}

	.nav.match-details-game-tab.blue a:hover,
	.nav.match-details-game-tab.blue a.active {
		border-top-color: #1489ac;
	}

	span.match-details-game-tab-favourite .number {
		border-color: #777;
		color: #666;
	}

	.nav.match-details-game-tab {
		background: #EEEEEE;
	}

	.match-details-game-tab-area .tab-content {
		background: #eee;
	}

	.match-details-game-tab-area .tab-content.match-details-game-tab {
		background: #081f31;
	}

	/* MATCH DETAILS GAME TAB AREA CSS END */
	/* MATCH DETAILS GAME INFO AREA CSS START */
	.match-details-game-info-area {
		background: #eee;
	}

	.match-details-game-info-wrapper {
		background: #e5e5e5;
	}

	/* MATCH DETAILS GAME INFO AREA CSS END */
	/****************************************
	            ADMIN PAGE CSS
	*****************************************/
	section.admin-template-area {
		background: #082234;
	}

	.admin-content {
		background: #FDFDFD;
	}

	/* ADMIN LEFT SIDEBAR CSS START */
	.admin-profile-image {
		background-color: #fff;
	}

	.admin-left-sidebar-toggle-btn-wrapper {
		background: #23507c;
		color: #fff;
	}

	.admin-profile-info-area {
		background: #fff;
	}

	span.admin-profile-image-hover {
		color: #fff;
		background: rgba(0, 0, 0, .6);
	}

	.admin-profile-id {
		color: #777;
	}

	.admin-profile-info-show-more-header:hover {
		color: #777;
	}

	.admin-profile-info-show-more-body .top-part {
		border-top-color: #ccc;
		border-bottom-color: #ccc;
	}

	span.registration-login-date {
		color: #777;
	}

	span.registration-login-date .date {
		color: #111;
	}

	span.vertical-divider {
		background: #ccc;
	}

	.admin-profile-balance {
		background: #23507c;
		color: #fff;
	}

	.admin-profile-sidebar-option-header-wrapper,
	.admin-profile-sidebar-option-header-wrapper:hover {
		color: #fff;
	}

	.admin-profile-sidebar-option-header {
		background: #23507c;
		color: #fff;
	}

	.admin-profile-sidebar-option-header:before {
		background: #23507c;
	}

	.admin-profile-sidebar-option-body {
		background: #EDECEF;
	}

	.admin-profile-sidebar-option-body a {
		color: #333;
		background: #fff;
	}

	.admin-profile-sidebar-option-header .icon {
		color: #fff;
	}

	.admin-profile-sidebar-option-body a:before {
		background: #23507c;
	}

	.admin-profile-left-sidebar-footer {
		background: #23507c;
	}

	/* Avater Upload Area Css Start */
	.admin-avater-list-area,
	.admin-menu-list-area {
		background: #fff;
		box-shadow: 0 0 7px #999;
	}

	.admin-avater-upload-droppable-area {
		border-color: #bbb;
	}

	.admin-avater-upload-area {
		border-bottom-color: #ccc;
	}

	.admin-avater-upload-instruction span {
		color: #777;
	}

	.admin-avater-upload-instruction .up-btn {
		background: #999;
		color: #fff;
	}

	.admin-single-avater-item {
		border-color: #eee;
	}

	.admin-single-avater-item:hover,
	.admin-single-avater-item.active {
		border-color: #23507c;
	}

	button.admin-avater-save-btn {
		background: #4684b4;
		color: #fff;
	}

	button.admin-avater-save-btn:hover {
		background: #23507c;
		color: #fff;
	}

	.admin-avater-list-area-arrow,
	.admin-menu-list-area-arrow {
		border-right-color: #ffff;
	}

	/* Avater Upload Area Css End */
	/* ADMIN LEFT SIDEBAR CSS END */
	/* ADMIN RIGHT SIDEBAR CSS START */
	.admin-page-close-btn {
		color: #999;
	}

	.admin-page-close-btn:hover {
		color: #666;
	}

	.admin-content a.nav-item.nav-link {
		color: #1E2531;
		border-right-color: #ddd;
		border-top-color: #ddd;
	}

	.admin-content a.nav-item.nav-link:first-child {
		border-left-color: #ddd;
	}

	.admin-content a.nav-item.nav-link:before {
		background: #fff;
	}

	.admin-content a.nav-item.nav-link:hover:before,
	.admin-content a.nav-item.nav-link.active:before {
		background: #23507c;
	}

	.admin-content a.nav-item.nav-link.active {
		color: #23507c;
	}

	.admin-content .tab-content.custom-scrollbar-2 .ps__rail-y,
	.admin-content .tab-content.custom-scrollbar-2.ps.ps--active-y > .ps__rail-y {
		background: #ececec;
	}

	.admin-content .tab-content.custom-scrollbar-2 .ps__thumb-y {
		background-color: #c4c4c4;
	}

	.admin-profile-update-form .form-group label {
		color: #444;
	}

	.admin-profile-update-form .form-group .form-control {
		background: #f9f9f9;
		border-color: #ddd;
	}

	.admin-profile-update-form .form-group .form-control:disabled,
	.admin-profile-update-form .form-group .form-control[readonly] {
		background: #f9f9f9;
		border-color: #eee;
	}

	.admin-profile-update-form .form-group .select2-container .select2-selection--single {
		background: #f9f9f9;
	}

	.admin-profile-update-form .form-group .select2-container .select2-selection--single .select2-selection__rendered {
		border-color: #ddd;
	}

	input.admin-profile-update-form-submit {
		background: #4684b4;
		color: #fff;
	}

	input.admin-profile-update-form-submit:hover {
		background: #23507c;
		color: #fff;
	}

	.admin-profile-table table tbody td {
		border-bottom-color: #eee;
	}

	.admin-profile-table table tbody tr:first-child td {
		border-top-color: #eee;
	}

	.admin-profile-table table tbody tr:nth-child(2n) td {
		background: #fafafa;
	}

	.admin-profile-table table tbody tr:nth-child(2n):hover td,
	.admin-profile-table table tbody tr:nth-child(2n+1):hover td {
		background: #e9e9e9;
	}

	.admin-profile-table table tbody tr:nth-child(2n+1) td {
		background: #f3f3f3;
	}

	.admin-profile-table table.table thead th {
		border-bottom-color: #dee2e6;
		background: #fafafa;
	}

	.table-pagination ul li a {
		border-color: #ddd;
		color: #1B222D;
	}

	.table-pagination ul li:first-child a {
		border-left-color: #ddd;
	}

	.table-pagination ul li a:hover,
	.table-pagination ul li.active a {
		color: #fff;
		background: #23507c;
	}

	.admin-profile-condition {
		background: #eee;
	}

	.admin-profile-condition .icon {
		background: #ccc;
	}

	.admin-profile-condition .colored-text {
		color: #e44a3f;
	}

	a.action-refund {
		background: #e44a3f;
		color: #fff;
	}

	a.action-refund:hover {
		background: #c3362c;
		color: #fff;
	}

	/* ADMIN RIGHT SIDEBAR CSS END */
	/* ADMIN COLLAPS ACTION CSS START */
	.admin-menu-list-area-arrow {
		border-right-color: #cecece;
	}

	/* ADMIN COLLAPS ACTION CSS START */
	/* USER PROFILE AFTER LOGIN CSS START */
	.after-login-dropdown-menu .nav a {
		color: #fff;
		border-color: #fff;
	}

	.after-login-dropdown-menu .nav a:hover,
	.after-login-dropdown-menu .nav a.active {
		background: #fff;
		color: #1e2531;
	}

	/* USER PROFILE AFTER LOGIN CSS END */
	/* SOME GENERAL CSS START */
	/* SOME GENERAL CSS END */
	/* RESPONSIVE SLICKNAV MENU CSS START */
	.slicknav_btn {
		background-color: #000;
	}

	.slicknav_nav {
		background: #1E2531;
		border-bottom-color: #A61D67;
	}

	.slicknav_nav li {
		border-top-color: #555;
	}

	.slicknav_nav .slicknav_row:hover,
	.slicknav_nav a:hover {
		background: #FFC536;
		color: #1E2531;
	}

	.slicknav_nav .slicknav_row:hover a {
		color: #1E2531;
	}

	/* RESPONSIVE SLICKNAV MENU CSS END */
	/* RESPONSIVE CUSTOM MENU CSS START */
	.responsive-main-menu-wrapper,
	.responsive-main-menu .dropdown-menu {
		background: #23507c;
	}

	.responsive-main-menu-wrapper {
		border-bottom-color: #F4E849;
	}

	.responsive-main-menu-wrapper li {
		border-top-color: rgba(255, 255, 255, .3);
	}

	.responsive-main-menu-wrapper li a:hover {
		background: #F4E849;
		color: #082234;
	}

	.responsive-main-menu-wrapper li a {
		color: #fff;
	}

	.responsive-main-menu button,
	.responsive-main-menu a.dropdown-toggle {
		background: transparent;
		color: #fff;
	}


	/* PRELOADER CSS END */
	/* LIVE EVENT FOR MOBILE CSS START */
	.live-events-in-mobile {
		background: #ddd;
	}

	.single-live-events-in-mobile {
		background: #fff;
	}

	span.single-live-events-in-mobile-team-score .team-score {
		background: transparent;
		color: #4684b4;
	}

	span.single-live-events-in-mobile-team-score .separator {
		color: #aaa;
	}

	span.single-live-events-in-mobile-team-name .team-name {
		color: #333;
	}

	.single-live-events-in-mobile-summary {
		color: #777;
	}

	/* LIVE EVENT FOR MOBILE CSS END */
	/* mCS SCROLLBAR CSS START */
	.mCSB_scrollTools .mCSB_draggerRail {
		background-color: #dadada !important;
	}

	.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
		background-color: #fff !important;
	}

	/* mCS SCROLLBAR CSS END */
	/* NGX SCROLLBAR CSS START */
	.custom-scrollbar-2 {
		--scrollbar-color: #082234 !important;
		--scrollbar-container-color: #082234 !important;
		--scrollbar-thumb-color: #23507c !important;
		--scrollbar-thumb-hover-color: #23507c !important;
	}

	.live-in-play-carousel-parent {
		--scrollbar-color: transparent !important;
		--scrollbar-container-color: transparent !important;
		--scrollbar-thumb-color: #23507c !important;
		--scrollbar-thumb-hover-color: #23507c !important;
	}

	/* NGX SCROLLBAR CSS END */
	/* NORMAL PERFECT SCROLLBAR CSS START */
	/* .custom-scrollbar-1 .ps__thumb-y,
	.custom-scrollbar-2 .ps__thumb-y,
	.custom-scrollbar-3 .ps__thumb-y {
	  background-color: #fff;
	}
	.custom-scrollbar-1 .ps__rail-y,
	.custom-scrollbar-1.ps.ps--active-y > .ps__rail-y,
	.custom-scrollbar-2 .ps__rail-y,
	.custom-scrollbar-2.ps.ps--active-y > .ps__rail-y,
	.custom-scrollbar-3 .ps__rail-y,
	.custom-scrollbar-3.ps.ps--active-y > .ps__rail-y {
	  background: #dadada;
	  border-color:  #dadada;
	}
	.custom-scrollbar-1 .ps__rail-y:hover > .ps__thumb-y,
	.custom-scrollbar-1 .ps__rail-y:focus > .ps__thumb-y,
	.custom-scrollbar-2 .ps__rail-y:hover > .ps__thumb-y,
	.custom-scrollbar-2 .ps__rail-y:focus > .ps__thumb-y,
	.custom-scrollbar-3 .ps__rail-y:hover > .ps__thumb-y,
	.custom-scrollbar-3 .ps__rail-y:focus > .ps__thumb-y {
	  background-color: #fff;
	} */
	/* NORMAL PERFECT SCROLLBAR CSS END */
	/* ANGULAR PERFECT SCROLLBAR CSS START */
	perfect-scrollbar > .ps.ps--active-y > .ps__rail-y {
		background: #082234 !important;
	}

	.custom-scrollbar-2 .ps__thumb-y {
		background-color: #23507c !important;
	}

	/* ANGULAR PERFECT SCROLLBAR CSS END */
	/* HEADER FIX CSS START */
	/* HEADER FIX CSS END */
	/* SOME FIX AFTER CONVERTING ANGULAR START */
	.form-control.empty {
		border-color: #ff4545;
	}

	/* SOME FIX AFTER CONVERTING ANGULAR END */
	.single-betlist-item .bottom-part span.non-stroke-through,
	.single-betlist-item .bottom-part span.stroke-through {
		background: #23507c;
	}

	.dataTables_wrapper .dataTables_paginate .paginate_button:hover,
	.dataTables_wrapper .dataTables_paginate span .paginate_button.current,
	.dataTables_wrapper .dataTables_paginate span .paginate_button.current:hover {
		background: #23507c !important;
		color: #fff !important;
		border-color: #23507c !important;
	}

	.admin-profile-table table.table thead th {
		border-bottom-color: #23507c;
		background: #23507c;
		color: #fff;
	}

	.live-in-play-carousel .owl-nav button {
		background: #346c97 !important;
	}

	.live-in-play-carousel .owl-nav button:hover,
	.live-in-play-carousel .owl-nav button.owl-next:hover {
		background: #346c97 !important;
	}

	.btn-primary.focus, button.btn.btn-primary.sign-in-btn:focus {
		box-shadow: 0 0 0 0.2rem rgba(255, 248, 38, 0.5);
	}


	.single-upcomming-match-bet .single-match-result-box {
		background: #F4E849;
		border-bottom: 1px solid rgba(5, 45, 32, 0.10);
		border-top: none;
	}

	.single-upcomming-match-bet .single-match-result-box .match-point {
		background: #dace29;
		color: #054631;
	}

	.single-upcomming-match-bet .single-match-result-accordion-body .row .col {
		border-right: none;
		border-top: none;
	}

	.single-upcomming-match-bet .single-match-result-accordion-header {
		font-size: 13px;
		display: flex;
		padding-right: 10px;
		min-height: 30px;
		text-align: center;
		justify-content: center;
	}


	/*from 1xbet*/
	.banCont .fixBunnersBut, .banCont .fixBunnersBut.active {
		position: absolute;
		right: 5px;
		cursor: pointer;
		height: 15px
	}

	.banCont .wrap_banners_right a, .noWrap2 #sports_right > :not(#cuponFix), .Show, body.fixedRight #sports_right {
		display: block
	}

	.noWrap2 #sports_right > .jspContainer {
		top: 0
	}

	.select2-drop.typeKofSelPage .select2-results li .select2-result-label {
		padding: 0;
		min-height: auto
	}

	.select2-drop.typeKofSelPage .select2-results li.select2-highlighted {
		background-color: #165c8f
	}

	.select2-drop.typeKofSelPage .select2-results li .ico {
		display: block;
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		width: 48px;
		background-position: 50% 50%;
		background-repeat: no-repeat
	}

	.noWrap2 #sports_right {
		right: 10px;
		bottom: 10px;
		z-index: 20;
		padding-left: 0;
		width: 250px;
		overflow: hidden
	}


	.select2-drop.typeKofSelLiga .select2-results {
		position: absolute;
		top: -20px;
		right: 0;
		padding: 21px 0 5px;
		min-width: 100%;
		margin: 0;
		border-radius: 2px;
		box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.2);
		background-color: #6aa5c3
	}

	.select2-drop.typeKofSelLiga .select2-results:before {
		content: '';
		position: absolute;
		top: 0;
		right: 0;
		width: 23px;
		height: 20px;
		background-image: url(../img/moreButArr2.png);
		background-position: 50% 8px;
		background-repeat: no-repeat;
		-webkit-transform: scale(1) rotate(180deg);
		transform: scale(1) rotate(180deg)
	}

	.select2-drop.typeKofSelLiga .select2-results li {
		cursor: pointer;
		padding: 4px 5px 4px 8px;
		min-width: 50px;
		white-space: nowrap;
		color: #fff
	}

	.select2-drop.typeKofSelLiga .select2-results li.select2-highlighted {
		background-color: #5290b0
	}

	.select2-drop.typeKofSelLiga .select2-results li .select2-result-label {
		padding: 0;
		min-height: auto
	}


	.finance #sports_right {
		position: absolute;
		top: 0;
		right: 0;
		bottom: auto;
		padding: 0 10px
	}

	body:not(.fixedRight) #sports_right.under-slider {
		top: 270px !important
	}

	body:not(.fixedRight).lite_version #sports_right.under-slider {
		top: 100px !important
	}

	.noWrap2 #sports_right {
		position: absolute;
		top: 0
	}

	.slot_mini-menu-item {
		display: inline-block;
		margin: 10px;
		text-align: center
	}

	#sports_right, #sports_right .jspContainer, #sports_right .rollbar-content {
		overflow: visible !important
	}

	#sports_right .rollbar-content #init-player {
		text-align: center
	}

	#not_auth_container {
		height: 147px;
		margin-bottom: 5px;
		overflow: hidden
	}

	.banCont {
		position: relative;
		width: 100%
	}

	#sports_right .banCont {
		margin-bottom: 5px
	}

	body:not(.fixedRight) #sports_right .banCont, body:not(.fixedRight) #sports_right .banCont_main {
		display: none
	}

	.banCont > div > a {
		display: block
	}

	.banCont > div > a + a {
		margin-top: 10px
	}

	.banCont .fixBunnersBut {
		top: 11px
	}

	.banCont .fixBunnersBut:hover::before {
		-webkit-animation: fixBunnersButAn2 ease 0.3s 1;
		animation: fixBunnersButAn2 ease 0.3s 1
	}

	@-webkit-keyframes fixBunnersButAn2 {
		0% {
			-webkit-transform: scale(1) rotate(180deg) translate(0);
			transform: scale(1) rotate(180deg) translate(0)
		}
		20% {
			-webkit-transform: scale(1) rotate(180deg) translateY(-2px);
			transform: scale(1) rotate(180deg) translateY(-2px)
		}
		40% {
			-webkit-transform: scale(1) rotate(180deg) translateY(4px);
			transform: scale(1) rotate(180deg) translateY(4px)
		}
		60% {
			-webkit-transform: scale(1) rotate(180deg) translateY(-4px);
			transform: scale(1) rotate(180deg) translateY(-4px)
		}
		80% {
			-webkit-transform: scale(1) rotate(180deg) translateY(2px);
			transform: scale(1) rotate(180deg) translateY(2px)
		}
		to {
			-webkit-transform: scale(1) rotate(180deg) translate(0);
			transform: scale(1) rotate(180deg) translate(0)
		}
	}

	@keyframes fixBunnersButAn2 {
		0% {
			-webkit-transform: scale(1) rotate(180deg) translate(0);
			transform: scale(1) rotate(180deg) translate(0)
		}
		20% {
			-webkit-transform: scale(1) rotate(180deg) translateY(-2px);
			transform: scale(1) rotate(180deg) translateY(-2px)
		}
		40% {
			-webkit-transform: scale(1) rotate(180deg) translateY(4px);
			transform: scale(1) rotate(180deg) translateY(4px)
		}
		60% {
			-webkit-transform: scale(1) rotate(180deg) translateY(-4px);
			transform: scale(1) rotate(180deg) translateY(-4px)
		}
		80% {
			-webkit-transform: scale(1) rotate(180deg) translateY(2px);
			transform: scale(1) rotate(180deg) translateY(2px)
		}
		to {
			-webkit-transform: scale(1) rotate(180deg) translate(0);
			transform: scale(1) rotate(180deg) translate(0)
		}
	}

	.banCont .fixBunnersBut.active:hover::before {
		-webkit-animation: fixBunnersButAn ease 0.3s 1;
		animation: fixBunnersButAn ease 0.3s 1
	}

	@-webkit-keyframes fixBunnersButAn {
		0% {
			-webkit-transform: scale(1) rotate(0deg) translate(0);
			transform: scale(1) rotate(0deg) translate(0)
		}
		20% {
			-webkit-transform: scale(1) rotate(0deg) translateY(-2px);
			transform: scale(1) rotate(0deg) translateY(-2px)
		}
		40% {
			-webkit-transform: scale(1) rotate(0deg) translateY(4px);
			transform: scale(1) rotate(0deg) translateY(4px)
		}
		60% {
			-webkit-transform: scale(1) rotate(0deg) translateY(-4px);
			transform: scale(1) rotate(0deg) translateY(-4px)
		}
		80% {
			-webkit-transform: scale(1) rotate(0deg) translateY(2px);
			transform: scale(1) rotate(0deg) translateY(2px)
		}
		to {
			-webkit-transform: scale(1) rotate(0deg) translate(0);
			transform: scale(1) rotate(0deg) translate(0)
		}
	}

	@keyframes fixBunnersButAn {
		0% {
			-webkit-transform: scale(1) rotate(0deg) translate(0);
			transform: scale(1) rotate(0deg) translate(0)
		}
		20% {
			-webkit-transform: scale(1) rotate(0deg) translateY(-2px);
			transform: scale(1) rotate(0deg) translateY(-2px)
		}
		40% {
			-webkit-transform: scale(1) rotate(0deg) translateY(4px);
			transform: scale(1) rotate(0deg) translateY(4px)
		}
		60% {
			-webkit-transform: scale(1) rotate(0deg) translateY(-4px);
			transform: scale(1) rotate(0deg) translateY(-4px)
		}
		80% {
			-webkit-transform: scale(1) rotate(0deg) translateY(2px);
			transform: scale(1) rotate(0deg) translateY(2px)
		}
		to {
			-webkit-transform: scale(1) rotate(0deg) translate(0);
			transform: scale(1) rotate(0deg) translate(0)
		}
	}

	.banCont .fixBunnersBut:before {
		content: '\f102';
		position: absolute;
		top: -5px;
		font-family: FontAwesome;
		font-size: 1.625em;
		color: #b4d7e8;
		-webkit-transform: scale(1) rotate(180deg);
		transform: scale(1) rotate(180deg)
	}

	.banCont .fixBunnersBut.active {
		top: 11px
	}

	.banCont .fixBunnersBut.active:before {
		-webkit-transform: scale(1) rotate(0);
		transform: scale(1) rotate(0)
	}


	.for-mini-game iframe {
		width: 100%;
		height: 300px
	}

	.for-mini-game #mini-preview {
		display: block;
		cursor: pointer;
		margin: auto
	}

	.for-mini-game .error-message {
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-align-items: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-justify-content: center;
		-ms-flex-pack: center;
		justify-content: center;
		height: 100%;
		text-align: center;
		font-size: 16px;
		color: #fff
	}

	.to_left .tutorial_popup {
		top: calc(50% - 58px);
		right: calc(100% + 17px)
	}

	.to_left .tutorial_popup:before {
		content: '\25B6';
		top: calc(50% - 13px);
		left: calc(100% - 3px);
		text-shadow: 2px 1px 2px rgba(0, 0, 0, 0.5);
		line-height: 25px
	}

	.tutorial_popup .popup_message {
		margin-top: 15px;
		margin-right: 15px;
		margin-left: 15px
	}

	.tutorial_popup .popup_message .popup_message_heading {
		position: static !important;
		margin: 0 !important;
		text-transform: uppercase;
		font-size: 0.875em;
		font-weight: 500;
		color: #064b7d !important
	}

	.tutorial_popup .popup_message .popup_message_text {
		margin-top: 10px !important;
		margin-left: 2px !important;
		font-size: 0.75em !important;
		font-weight: 400 !important;
		line-height: 15px !important;
		color: #3f4c5d !important
	}

	.tutorial_popup .popup_close {
		display: block !important;
		position: static !important;
		cursor: pointer;
		padding: 5px;
		margin: 0;
		border-radius: 0 0 3px 3px;
		background-color: #004a82;
		text-align: center;
		text-decoration: none;
		font-size: 0.75em;
		line-height: 16px;
		color: #fff;
		transition: all 0.3s
	}

	.banCont.latent .fz {
		border-radius: 3px
	}


	.banCont.latent {
		margin-bottom: 10px
	}

	.wrap_banners_right img {
		width: 100%;
		height: auto
	}

	.right-banners-block {
		-webkit-flex-direction: column;
		-ms-flex-direction: column;
		flex-direction: column;
		margin-top: 5px
	}

	.br-banner {
		box-sizing: border-box; 
		padding: 13px;
		width: 100%;
		margin-bottom: 15px;
		background: top no-repeat #113756db;
		background-size: cover;
		text-transform: uppercase;
		font-size: 13px;
		color: #fff
	}

	.br-banner .sport_icons, .br-banner .icon {
		display: block;
		width: 24px;
		height: 24px;
		margin: 8px auto 0
	}

	.br-banner .icon {
		fill: #fff
	}

	.br-banner a {
		text-decoration: none;
		color: inherit
	}

	.br-banner__title {
		margin-bottom: 10px
	}

	.br-banner-body {
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-justify-content: space-between;
		-ms-flex-pack: justify;
		justify-content: space-between;
		margin-bottom: 13px;
		background-image: url(./bgvs.png);
		background-position: top 14px center;
		background-repeat: no-repeat;
		background-size: 90px
	}

	.br-banner-team {
		width: 60px;
		font-size: 9px;
		letter-spacing: 0.33px
	}

	.br-banner-team__image {
		margin-bottom: 11px
	}

	.br-banner-team__image img {
		max-width: 100%
	}

	.br-banner-info {
		-webkit-align-self: flex-end;
		-ms-flex-item-align: end;
		align-self: flex-end;
		-webkit-transform: translateY(5px);
		transform: translateY(5px)
	}

	.br-banner-info__time {
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		position: relative;
		-webkit-flex-direction: column;
		-ms-flex-direction: column;
		flex-direction: column;
		-webkit-align-items: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-justify-content: center;
		-ms-flex-pack: center;
		justify-content: center;
		width: 43px;
		height: 43px;
		margin-bottom: 7px;
		border: 1px solid #647786;
		border-radius: 50%;
		background-color: #113756db;
		font-size: 10px
	}

	.br-banner-info__time:after, .br-banner-info__time:before {
		content: '';
		position: absolute;
		top: 50%;
		width: 24px;
		height: 1px;
		background-color: #95cc37;
		-webkit-transform: translateY(-50%);
		transform: translateY(-50%)
	}

	.br-banner-info__time:before {
		right: 100%
	}

	.br-banner-info__time:after {
		left: 100%
	}

	.br-banner-footer {
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-align-items: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-justify-content: space-between;
		-ms-flex-pack: justify;
		justify-content: space-between;
		padding: 0 8px;
		background-color: #FFFFFF;
		font-size: 12px
	}

	.br-banner-footer__val {
		-webkit-flex-grow: 1;
		-ms-flex-positive: 1;
		flex-grow: 1;
		-webkit-flex-shrink: 1;
		-ms-flex-negative: 1;
		flex-shrink: 1
	}

	.br-banner-footer__val--left {
		padding-right: 10px
	}

	.br-banner-footer__val--right {
		padding-left: 10px
	}

	.br-banner-footer__btn {
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		position: relative;
		z-index: 0;
		-webkit-align-items: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-justify-content: center;
		-ms-flex-pack: center;
		justify-content: center;
		min-height: 32px;
		margin-top: -1px;
		margin-bottom: -1px;
		padding-left: 13px;
		padding-right: 13px;
		box-shadow: 0 0 25px rgba(0, 0, 0, 0.25);
		background-color: #6c952b;
		font-size: 10px;
		transition: all 0.5s
	}

	@media screen and (min-width: 0\0
	) {
		.br-banner-footer__btn {
			height: 32px
		}
	}

	.br-banner-footer__btn:hover {
		box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);
		background-color: #89bc37
	}

	.br-banner-footer__btn:hover:after, .br-banner-footer__btn:hover:before {
		background-color: #89bc37
	}

	.br-banner-footer__btn:after, .br-banner-footer__btn:before {
		content: '';
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		z-index: -1;
		background-color: #6c952b;
		transition: all 0.5s;
		-webkit-transform-origin: bottom;
		transform-origin: bottom
	}

	.br-banner-footer__btn:after {
		-webkit-transform: skew(-24deg);
		transform: skew(-24deg)
	}

	.br-banner-footer__btn:before {
		-webkit-transform: skew(24deg);
		transform: skew(24deg)
	}

	.bancont-main--center {
		text-align: center
	}

	@media (min-width: 1366px) {
		.biggerRight .banCont .br-banner, .biggestRight .banCont .br-banner {
			padding: 22px 24px
		}

		.biggerRight .banCont .br-banner__title, .biggestRight .banCont .br-banner__title {
			margin-bottom: 0
		}

		.biggerRight .banCont .br-banner-body, .biggestRight .banCont .br-banner-body {
			background-size: 120px
		}

		.biggerRight .banCont .br-banner-team, .biggestRight .banCont .br-banner-team {
			width: 120px;
			font-size: 13px
		}

		.biggerRight .banCont .br-banner-info__time, .biggestRight .banCont .br-banner-info__time {
			width: 62px;
			height: 62px;
			font-size: 13px
		}

		.biggerRight .banCont .br-banner-info__time:after, .biggerRight .banCont .br-banner-info__time:before, .biggestRight .banCont .br-banner-info__time:after, .biggestRight .banCont .br-banner-info__time:before {
			width: 41px
		}

		.biggerRight .banCont .br-banner-footer, .biggestRight .banCont .br-banner-footer {
			font-size: 15px
		}

		.biggerRight .banCont .br-banner-footer__btn, .biggestRight .banCont .br-banner-footer__btn {
			padding: 7px 17px;
			min-height: 40px;
			margin: -1px 30px;
			font-size: 14px
		}
	}

	@media screen and (min-width: 1366px) and (min-width: 0\0
	) {
		.biggerRight .banCont .br-banner-footer__btn, .biggestRight .banCont .br-banner-footer__btn {
			height: 40px
		}
	}

	@media (min-width: 1366px) {
		.biggerRight .banCont .br-banner-body {
			background-size: 109px
		}

		.biggerRight .banCont .br-banner-team {
			width: 90px;
			font-size: 11px
		}

		.biggerRight .banCont .br-banner-footer {
			font-size: 14px
		}

		.biggerRight .banCont .br-banner-footer__btn {
			margin: -1px 20px;
			font-size: 13px
		}

		.biggerRight .banCont .br-banner-info__time:after, .biggerRight .banCont .br-banner-info__time:before {
			width: 30px
		}
	}

	@media screen and (max-width: 1000px) {
		#sports_right {
			position: absolute;
			top: 0;
			margin-top: 0 !important
		}
	}

	@media screen and (min-width: 1366px) {
		.biggerRight #not_auth_container, .biggestRight #not_auth_container {
			height: 232px
		}

		.fixedRight.biggestRight .banCont {
			width: 400px
		}

		.fixedRight.biggestRight .wrap_banners_right img {
			width: 400px;
			max-width: 100%
		}

		.banCont .wrap_banners_right a {
			padding: 0 10px
		}
	}

	@media screen and (max-width: 1550px) {
		.noWrap2 #sports_right > .jspContainer {
			top: 0
		}
	}

	@media screen and (min-width: 1920px) {
		.biggestRight #not_auth_container {
			height: 275px
		}

		.fixedRight.biggestRight .banCont {
			width: 100%;
			font-size: 16px
		}

		.fixedRight.biggestRight .wrap_banners_right img {
			width: 235px;
			max-width: 100%
		}

		.fixedRight.biggestRight .wrap_banners_right:not(.egt-jackpot) {
			-webkit-flex: 1 1 40%;
			-ms-flex: 1 1 40%;
			flex: 1 1 40%;
			max-width: 50%;
			margin: 0 0 10px
		}

		.banCont .wrap_banners_right a {
			opacity: 0.8;
			display: block;
			padding: 0 5px;
			transition: opacity 0.2s linear
		}

		.banCont .wrap_banners_right a:hover {
			opacity: 1
		}

		.fixedRight.biggestRight .right-banners-block {
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-flex-flow: row wrap;
			-ms-flex-flow: row wrap;
			flex-flow: row wrap;
			-webkit-justify-content: space-between;
			-ms-flex-pack: justify;
			justify-content: space-between
		}
	}

	.cyber_light .iscroll-wrap {
		padding-bottom: 3.75em
	}


	.cyber-calendar-popup__scroll .ps__scrollbar-y-rail {
		opacity: 1 !important;
		right: 0 !important;
		left: auto !important;
		width: .83333em !important;
		border-radius: 4px;
		background-color: #eaeff3 !important
	}

	.cyber-calendar-popup__scroll .ps__scrollbar-y-rail > .ps__scrollbar-y {
		right: 1px !important;
		width: .66667em !important;
		background-color: #88b2d0 !important
	}

	.cyber-calendar-popup__scroll .ps__scrollbar-x-rail {
		display: none !important
	}

	#nU_howBet, #U_howBet, .br-banner, .slot_mini-another, .slot_mini-menu {
		text-align: center;
	}

	.c-tabs__header {
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		height: 100%;
		overflow: hidden
	}

	.c-tabs__item {
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		position: relative;
		z-index: 0;
		cursor: pointer;
		-webkit-flex: 1 0 50%;
		-ms-flex: 1 0 50%;
		flex: 1 0 50%;
		-webkit-align-items: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-justify-content: center;
		-ms-flex-pack: center;
		justify-content: center;
		padding: .30769em .61538em;
		min-width: 0;
		min-height: 2.61538em;
		margin: 0;
		outline: none;
		border: 0;
		background: none;
		text-align: center;
		text-transform: uppercase;
		font-size: 1em;
		font-weight: 500;
		color: #fff
	}

	.c-tabs__item:before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		z-index: -1;
		width: 100%;
		height: 100%;
		background: #9aa9c0;
		border-right: 1px solid transparent
	}

	.c-tabs__item:hover {
		color: #fff
	}

	.c-tabs__item:hover:after, .c-tabs__item:hover:before {
		background: #286aa4 !important
	}

	.c-tabs__item--active {
		color: #286aa4
	}

	.c-tabs__item--active:before {
		background: #eee
	}

	.c-tabs__name {
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
		display: block
	}

	.c-tabs--folder {
		overflow: hidden
	}

	.c-tabs--folder .c-tabs__header {
		margin: 0 -25px;
		overflow: hidden;
		padding-right: 16px
	}

	.c-tabs--folder .c-tabs__item:after {
		content: '';
		display: none;
		position: absolute;
		top: 0;
		left: 0;
		z-index: -1;
		width: 100%;
		height: 100%
	}

	.c-tabs--folder .c-tabs__item:before {
		-webkit-transform: skew(16deg);
		transform: skew(16deg)
	}

	.c-tabs--folder .c-tabs__item:first-child {
		padding-left: .92308em
	}

	_:-ms-fullscreen .c-tabs__item, :root .c-tabs__item {
		background: #9aa9c0;
		-ms-flex-preferred-size: auto;
		flex-basis: auto
	}

	_:-ms-fullscreen .c-tabs__item--active, :root .c-tabs__item--active {
		background: #eee
	}

	_:-ms-fullscreen .c-tabs__item:hover, :root .c-tabs__item:hover {
		background: #286aa4 !important
	}


	/*#clockdiv{*/
	/*	font-family: sans-serif;*/
	/*	color: #fff;*/
	/*	display: inline-block;*/
	/*	font-weight: 100;*/
	/*	text-align: center;*/
	/*	font-size: 10px;*/
	/*}*/

	/*#clockdiv > div{*/
	/*	padding: 1px;*/
	/*	border-radius: 3px;*/
	/*	background: #00BF96;*/
	/*	display: inline-block;*/
	/*}*/

	/*#clockdiv div > span{*/
	/*	padding: 1px;*/
	/*	border-radius: 3px;*/
	/*	background: #00816A;*/
	/*	display: inline-block;*/
	/*}*/

	/*.smalltext{*/
	/*	padding-top: 5px;*/
	/*	font-size: 11px;*/
	/*}*/


	.blink {
		animation: blinker 1.5s cubic-bezier(.5, 0, 1, 1) infinite alternate;
	}
	@keyframes blinker {
		from { opacity: 1; }
		to { opacity: 0; }
	}



	.lds-ripple {
		display: inline-block;
		position: relative;
		width: 64px;
		height: 64px;
		left: 48%;
		top: 47%;
	}
	.lds-ripple div {
		position: absolute;
		border: 4px solid #fff;
		opacity: 1;
		border-radius: 50%;
		animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
	}
	.lds-ripple div:nth-child(2) {
		animation-delay: -0.5s;
	}
	@keyframes lds-ripple {
		0% {
			top: 36px;
			left: 36px;
			width: 0;
			height: 0;
			opacity: 1;
		}
		100% {
			top: 0px;
			left: 0px;
			width: 72px;
			height: 72px;
			opacity: 0;
		}
	}

	.loads {
		position: fixed;
		z-index: 999;
		height: 2em;
		width: 2em;
		overflow: show;
		margin: auto;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
	}


	#loader-wrapper {
		position: fixed;
		background: #222831;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 1000;
	}

	#preloader {
		display: inline-block;
		position: relative;
		left: 45%;
		top: 30%;
	}

	#preloader span {
		display: block;
		position: absolute;
		border-radius: 16px;
		height: 8px;
		top: 180px;
		left: 0px;
		width: 32px;
		bottom: 0;
		background: #00ADB5;
		animation: preloader 2.5s infinite cubic-bezier(0.4, 0.0, 0.2, 1) ;
	}

	#preloader span:nth-child(2){
		left: 40px;
		top: 180px;
		animation-delay: 100ms;
	}

	#preloader span:nth-child(3){
		left: 80px;
		top: 180px;
		animation-delay: 200ms;
	}

	#preloader span:nth-child(4){
		left: 120px;
		top: 180px;
		animation-delay: 300ms;
	}

	#preloader span:nth-child(5){
		left: 160px;
		top: 180px;
		animation-delay: 400ms;
	}

	@keyframes preloader {
		0% { height: 8px; transform: translateY(0px); background: #00ADB5;   }
		25% { height: 60px; transform: translateY(-14px); background: #3498db;
		}
		50% {height:4px; transform: translateY(0px); background:#00FFF5;
		}
		100%{ height:4px; transform:translateY(0px) ;background:#393E46;
		}
	}


	#lodingPage {
		position: relative;
		width: 100%;
		height: 2px;
		background-color: #fdba2c;
	}
	#lodingPage span {
		content: "";
		display: inline;
		position: absolute;
		width: 0;
		height: 100%;
		left: 50%;
		text-align: center;
	}
	#lodingPage span:nth-child(1) {
		background-color: #da4733;
		animation: loading 3s linear infinite;
	}
	#lodingPage span:nth-child(2) {
		background-color: #3b78e7;
		animation: loading 3s linear 1s infinite;
	}
	#lodingPage span:nth-child(3) {
		background-color: #fdba2c;
		animation: loading 3s linear 2s infinite;
	}
	@keyframes loading {
		from {left: 50%; width: 0;z-index:100;}
		33.3333% {left: 0; width: 100%;z-index: 10;}
		to {left: 0; width: 100%;}
	}


	.dropdown {
		float: left;
		overflow: hidden;
	}

	.dropdown .dropbtn {
		font-size: 16px;
		border: none;
		outline: none;
		color: white;
		padding: 14px 16px;
		background-color: inherit;
		font-family: inherit;
		margin: 0;
	}

	.navbar a:hover, .dropdown:hover .dropbtn {
		/*background-color: red;*/
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	.dropdown-content a {
		float: none;
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		text-align: left;
	}

	.dropdown-content a:hover {
		background-color: #ddd;
	}

	.dropdown:hover .dropdown-content {
		display: block;
	}

	.e-reg-ch:not(:last-of-type) {
		margin-right: 1px;
	}

	.e-reg-ch span {
		padding: 3em;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
		font-size: 0.875em;
		line-height: 2.3em;
	}

	.e-reg-div {
		width: 100%;
		height: 2.125em;
		background-color: #d7e5f1;
		display: flex;
	}

	.e-reg-ch {
		background-color: #87a3bb;
		width: 50%;
		cursor: pointer;
		align-items: center;
		justify-content: center;
		height: 2.125em;
		color: white;
	}

	.e-reg-ch.active {
		background-color: #377bbb;
		color: #fff;
		transition: background-color 0.3s ease;
	}

	.e-reg-ch:hover {
		background-color: #377bbb;
	}

	.input-containerr {
		display: -ms-flexbox; /* IE10 */
		display: flex;
		width: 100%;
		margin-bottom: 15px;
	}

	.iconr {
		padding: 15px;
		background: #23507c;
		color: white;
		min-width: 50px;
		text-align: center;
	}

	.input-fieldr {
		width: 100%;
		padding: 10px;
		outline: none;
		border-radius: 0;
		background: transparent;
		border: 1px solid rgba(255, 255, 255, .4);
		font-size: 13px;
		color: #ffffff;
		padding: 7px;
	}

	.option {
		background: rgba(18, 28, 63, 0.85);
		color: #fff;
		text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
	}

	.input-fieldr:focus {
		border: 2px solid #104980;
	}

	/* Set a style for the submit button */
	.btnr {
		background-color: #6c952b;
		color: white;
		padding: 15px 20px;
		border: none;
		cursor: pointer;
		width: 100%;
		opacity: 0.9;
	}

	.btnr:hover {
		opacity: 0.6;
	}

	::-webkit-input-placeholder { /* Edge */
		color: #ffffff;
	}

	:-ms-input-placeholder { /* Internet Explorer 10-11 */
		color: #ffffff;
	}

	::placeholder {
		color: #ffffff;
	}


	/****** LOGIN MODAL ******/
	.modal-dialog {
		margin-top: 3.5em!important;
	}


	#box {
	    /*width: 10em;
	    height: 6em;
	    border: 4px solid #ccc;
	    background-color: #fff;
	    position: relative;*/
	}

	#box::before,
	#box::after {
	    content: '';
	    position: absolute;
	    top: 0;
	    right: 0;
	    border-color: transparent;
	    border-style: solid;
	}

	#box::before {
	    /*border-width: 0.5em;*/
	    border-right-color: #e31515;
	    border-top-color: #e31515;
	}

	#box::after {
	    /*border-radius: 0.4em;*/
	    border-width: 0.36em;
	    border-right-color: #e31515;
	    border-top-color: #e31515;
	}


	.container-fluid-new{
		width: 100%;
		padding-right: 15px;
		padding-left: 15px;
		margin-right: auto;
		margin-left: auto;
		height: auto;
	}

	.container-fluid-btm{
		width: 100%;
		padding-right: 15px;
		padding-left: 15px;
		margin-right: auto;
		margin-left: auto;
		height: 50%;
	}

	.foot_div{
		display: flex;
		height: 50%;
	}
	.foot_img{
		padding: 5px;
		width: 15%;
	}



	.footer_part {
	    background: linear-gradient(to bottom, #104167 0%, #2f5f83 100%);
	    padding: 60px 0 50px;
	    display: block;
	    color: #ffffff;
	    text-align: justify;
	}

	.copyright_info {
	    color: #ffffff;
	    text-align: left;
	    text-align: justify;
	}

	.disclimar_block {
	    display: block;
	    margin-top: 30px;
	}

	@media (max-width: 767px){
		.copyright_info {
		    text-align: center;
		}
	}

	@media (max-width: 767px){
		.footer_quick_link {
		    margin: 15px 0;
		    text-align: center;
		}
		.footer_quick_link ul {
	    border-top: 1px solid #6c757d;
	    padding-bottom: 5px;
	    padding-top: 10px;
		}
	}
	.footer_quick_link ul {
	    line-height: normal;
	    padding: 0;
	    margin: 0;
	}
	.footer_quick_link ul li {
	    display: block;
	    line-height: 22px;
	}
	.footer_quick_link ul li a {
	    color: #dee2e6;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 13px;
	    display: inline-block;
	}
	.payment_icon_block_bottom {
	    display: block;
	    text-align: center;
	    margin: 30px 0;
	}
</style>
<footer class="footer_part" style="background-color:#004D40;min-height:10px;">


        <!-- <div class="container" style="max-width: 1500px;">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="copyright_info">
                        <img src="<?php base_url(); ?>assets/images/logo-safe60.jpeg" alt="" title="3xbet online" width='80' class="">
                        
                        
						<p style="font-size:12px;">Copyright © 2018 - 2021 safe60 All rights reserved and protected by law. safe60.net, safe60 Sports Inc., registration number GFQ2011, Office 1/2000, 6 fifth yang road, New York. 629757, USA. safe60 Sports Inc. is licensed and regulated by the Casino Regulatory Authority of USA, Dubai & Singapur</p>
						<p><b>Caution!</b> We are strongly discourage to use this site who are not 18+</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="footer_quick_link">
                                <h5>Betting</h5>
                                <ul>
                                    <li><a href="">Spotrs</a></li>
                                    <li><a href="">Multi-Live</a></li>
                                    <li><a href="">Live</a></li>
                                    <li><a href="">Live Casino</a></li>
                                    <li><a href="">Number</a></li>
                                    <li><a href="">Toto</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="footer_quick_link">
                                <h5>Game</h5>
                                <ul>
                                    <li><a href="">Toto</a></li>
                                    <li><a href="">Slots</a></li>
                                    <li><a href="">Live TV Game</a></li>
                                    <li><a href="">Bingo</a></li>
                                    <li><a href="">Casino</a></li>
                                    <li><a href="">Bitcoin</a></li>
                                    <li><a href="">BS24 Game</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="footer_quick_link">
                                <h5>Information</h5>
                                <ul>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>            	
                </div>

                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="footer_quick_link">
                        <h5>Service Center</h5>
                        <ul>
                            <li><a href="">Dubai</a></li>
                            <li><a href="">Malaysia</a></li>
                            <li><a href="">Singapur</a></li>
                        </ul>
                        <br>
                        <h5>Downloads</h5>
                        <div class="mobile_app_download_icon">
                            <a target="_blank" href="">
                                <img width="100" alt="" src="<?php echo base_url(); ?>assets/img/android.png">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

			<div class="row" style="margin-top:10px;text-align:center">
				<div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:10px">
					<img src="https://playsbet365.in/front-end/img/footer-logo/Neteller.png" class="fm-PartnerLogoContainer_Icon fm-PartnerLogoContainer_IconLink img-thumbnail">
				</div>
				
				<div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:10px">
					<img src="https://playsbet365.in/front-end/img/footer-logo/paypal.png" class="fm-PartnerLogoContainer_Icon fm-PartnerLogoContainer_IconLink  img-thumbnail">
				</div>
				
				<div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:10px">
					<img src="https://playsbet365.in/front-end/img/footer-logo/Skrill.png" class="fm-PartnerLogoContainer_Icon  img-thumbnail">
				</div>
				
				<div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:10px">
					<img src="https://playsbet365.in/front-end/img/footer-logo/visa.png" class="fm-PartnerLogoContainer_Icon fm-PartnerLogoContainer_IconLink  img-thumbnail">
				</div>
	        </div>

            <div class="payment_icon_block_bottom">
				<div class="col-sm-6 col-md-6 col-lg-12">
					<img src="<?php echo base_url(); ?>assets/images/images/bkash.jpg" style="width: 80px;height:45px;margin-bottom:10px">
					<img src="<?php echo base_url(); ?>assets/images/images/rocket.png" style="width: 80px;height:45px;margin-bottom:10px">
					<img src="<?php echo base_url(); ?>assets/images/images/nagad.png" style="width: 80px;height:45px;margin-bottom:10px">
				</div>
				<div class="col-sm-6 col-md-6 col-lg-12">

					<img src="<?php echo base_url(); ?>assets/img/partner/instagram.png" width="40">&nbsp;
					<img src="<?php echo base_url(); ?>assets/img/partner/youtube.jpg" width="40">&nbsp;
				</div>
            </div>

            <div class="disclimar_block">
                <p><?php //echo get_copyright_message(); ?></p>
            </div>
        </div> -->

	
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/popper.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="<?= base_url(); ?>assets/js/js.cookie.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/index.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/moment.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/daterangepicker.js"></script>

        <!-- Custom JQuery -->
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/common.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/topNavJquery.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/sportsListJquery69.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/userProfile.js"></script>
        <!-- Custom JQuery -->
        <style>
        	#neymar-box {
        		display: none;
        	}
			@media screen and (max-width: 480px) {

				.navbar {
					box-shadow: none;
					margin-bottom: 5px;
				}

				/*after login*/
				#neymar-box {
        			display: block;
        		}
				#header-logo-user {
					height: 35px;
					/*width: 150px;*/
					width: 115% !important;
					margin-left: 13px;
				}
				#neymar-logo {
					/*border:1px solid #444;*/
					/*width:40px;*/
					margin-left: 30px;
					/*padding-bottom: -20px !important;*/
				}
				#neymar-name {
					color: #FFF !important;
					border: 1px solid red;
					font-size: 10px;
					margin-left: 40px;
					padding-top: 0px !important;
					font-weight: normal;
					/*margin-top: -100px !important;*/
				}
			}
        </style>
</footer>




    <?php include(APPPATH . "views/appjs_public.php"); ?>
    <?php if( !empty($this->session->userdata['cus_data']) && is_object($this->session->userdata['cus_data']) ) : ?>
	
		<style>
		@media screen and (max-width: 480px) {
			#header-logo {
				height: 35px;
				/*width: 150px;*/
				width: 80% !important;
				margin-left: -20px;
				/*margin-left: -136px;*/
			}
		}
		</style>
	
        <?php include(APPPATH . "views/appjs.php"); ?>
    <?php elseif( !empty($this->session->userdata['club_user_data']) && is_object($this->session->userdata['club_user_data']) ) : ?>

		<style>
		@media screen and (max-width: 480px) {
			#header-logo {
				height: 35px;
				/*width: 150px;*/
				width: 80% !important;
				margin-left: -20px;
				/*margin-left: -136px;*/
			}
		}
		</style>

        <?php include(APPPATH . "views/appjs_club.php"); ?>
		
	<?php else: ?>
	
		<style>
		@media screen and (max-width: 480px) {
			#header-logo {
				height: 35px;
				/*width: 150px;*/
				width: 80% !important;
				/*margin-left: -25px;*/
				margin-left: -70px;
			}
		}
		</style>
	
    <?php endif; ?>

</body>
</html>