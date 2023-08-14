<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><title>What to watch</title><style>
/* cspell:disable-file */
/* webkit printing magic: print all background colors */
html {
	-webkit-print-color-adjust: exact;
}
* {
	box-sizing: border-box;
	-webkit-print-color-adjust: exact;
}

html,
body {
	margin: 0;
	padding: 0;
}
@media only screen {
	body {
		margin: 2em auto;
		max-width: 900px;
		color: rgb(55, 53, 47);
	}
}

body {
	line-height: 1.5;
	white-space: pre-wrap;
}

a,
a.visited {
	color: inherit;
	text-decoration: underline;
}

.pdf-relative-link-path {
	font-size: 80%;
	color: #444;
}

h1,
h2,
h3 {
	letter-spacing: -0.01em;
	line-height: 1.2;
	font-weight: 600;
	margin-bottom: 0;
}

.page-title {
	font-size: 2.5rem;
	font-weight: 700;
	margin-top: 0;
	margin-bottom: 0.75em;
}

h1 {
	font-size: 1.875rem;
	margin-top: 1.875rem;
}

h2 {
	font-size: 1.5rem;
	margin-top: 1.5rem;
}

h3 {
	font-size: 1.25rem;
	margin-top: 1.25rem;
}

.source {
	border: 1px solid #ddd;
	border-radius: 3px;
	padding: 1.5em;
	word-break: break-all;
}

.callout {
	border-radius: 3px;
	padding: 1rem;
}

figure {
	margin: 1.25em 0;
	page-break-inside: avoid;
}

figcaption {
	opacity: 0.5;
	font-size: 85%;
	margin-top: 0.5em;
}

mark {
	background-color: transparent;
}

.indented {
	padding-left: 1.5em;
}

hr {
	background: transparent;
	display: block;
	width: 100%;
	height: 1px;
	visibility: visible;
	border: none;
	border-bottom: 1px solid rgba(55, 53, 47, 0.09);
}

img {
	max-width: 100%;
}

@media only print {
	img {
		max-height: 100vh;
		object-fit: contain;
	}
}

@page {
	margin: 1in;
}

.collection-content {
	font-size: 0.875rem;
}

.column-list {
	display: flex;
	justify-content: space-between;
}

.column {
	padding: 0 1em;
}

.column:first-child {
	padding-left: 0;
}

.column:last-child {
	padding-right: 0;
}

.table_of_contents-item {
	display: block;
	font-size: 0.875rem;
	line-height: 1.3;
	padding: 0.125rem;
}

.table_of_contents-indent-1 {
	margin-left: 1.5rem;
}

.table_of_contents-indent-2 {
	margin-left: 3rem;
}

.table_of_contents-indent-3 {
	margin-left: 4.5rem;
}

.table_of_contents-link {
	text-decoration: none;
	opacity: 0.7;
	border-bottom: 1px solid rgba(55, 53, 47, 0.18);
}

table,
th,
td {
	border: 1px solid rgba(55, 53, 47, 0.09);
	border-collapse: collapse;
}

table {
	border-left: none;
	border-right: none;
}

th,
td {
	font-weight: normal;
	padding: 0.25em 0.5em;
	line-height: 1.5;
	min-height: 1.5em;
	text-align: left;
}

th {
	color: rgba(55, 53, 47, 0.6);
}

ol,
ul {
	margin: 0;
	margin-block-start: 0.6em;
	margin-block-end: 0.6em;
}

li > ol:first-child,
li > ul:first-child {
	margin-block-start: 0.6em;
}

ul > li {
	list-style: disc;
}

ul.to-do-list {
	padding-inline-start: 0;
}

ul.to-do-list > li {
	list-style: none;
}

.to-do-children-checked {
	text-decoration: line-through;
	opacity: 0.375;
}

ul.toggle > li {
	list-style: none;
}

ul {
	padding-inline-start: 1.7em;
}

ul > li {
	padding-left: 0.1em;
}

ol {
	padding-inline-start: 1.6em;
}

ol > li {
	padding-left: 0.2em;
}

.mono ol {
	padding-inline-start: 2em;
}

.mono ol > li {
	text-indent: -0.4em;
}

.toggle {
	padding-inline-start: 0em;
	list-style-type: none;
}

/* Indent toggle children */
.toggle > li > details {
	padding-left: 1.7em;
}

.toggle > li > details > summary {
	margin-left: -1.1em;
}

.selected-value {
	display: inline-block;
	padding: 0 0.5em;
	background: rgba(206, 205, 202, 0.5);
	border-radius: 3px;
	margin-right: 0.5em;
	margin-top: 0.3em;
	margin-bottom: 0.3em;
	white-space: nowrap;
}

.collection-title {
	display: inline-block;
	margin-right: 1em;
}

.page-description {
    margin-bottom: 2em;
}

.simple-table {
	margin-top: 1em;
	font-size: 0.875rem;
	empty-cells: show;
}
.simple-table td {
	height: 29px;
	min-width: 120px;
}

.simple-table th {
	height: 29px;
	min-width: 120px;
}

.simple-table-header-color {
	background: rgb(247, 246, 243);
	color: black;
}
.simple-table-header {
	font-weight: 500;
}

time {
	opacity: 0.5;
}

.icon {
	display: inline-block;
	max-width: 1.2em;
	max-height: 1.2em;
	text-decoration: none;
	vertical-align: text-bottom;
	margin-right: 0.5em;
}

img.icon {
	border-radius: 3px;
}

.user-icon {
	width: 1.5em;
	height: 1.5em;
	border-radius: 100%;
	margin-right: 0.5rem;
}

.user-icon-inner {
	font-size: 0.8em;
}

.text-icon {
	border: 1px solid #000;
	text-align: center;
}

.page-cover-image {
	display: block;
	object-fit: cover;
	width: 100%;
	max-height: 30vh;
}

.page-header-icon {
	font-size: 3rem;
	margin-bottom: 1rem;
}

.page-header-icon-with-cover {
	margin-top: -0.72em;
	margin-left: 0.07em;
}

.page-header-icon img {
	border-radius: 3px;
}

.link-to-page {
	margin: 1em 0;
	padding: 0;
	border: none;
	font-weight: 500;
}

p > .user {
	opacity: 0.5;
}

td > .user,
td > time {
	white-space: nowrap;
}

input[type="checkbox"] {
	transform: scale(1.5);
	margin-right: 0.6em;
	vertical-align: middle;
}

p {
	margin-top: 0.5em;
	margin-bottom: 0.5em;
}

.image {
	border: none;
	margin: 1.5em 0;
	padding: 0;
	border-radius: 0;
	text-align: center;
}

.code,
code {
	background: rgba(135, 131, 120, 0.15);
	border-radius: 3px;
	padding: 0.2em 0.4em;
	border-radius: 3px;
	font-size: 100%;
	tab-size: 2;
}

code {
	color: #eb5757;
}

.code {
	padding: 1.5em 1em;
}

.code-wrap {
	white-space: pre-wrap;
	word-break: break-all;
}

.code > code {
	background: none;
	padding: 0;
	font-size: 100%;
	color: inherit;
}

blockquote {
	font-size: 1.25em;
	margin: 1em 0;
	padding-left: 1em;
	border-left: 3px solid rgb(55, 53, 47);
}

.bookmark {
	text-decoration: none;
	max-height: 8em;
	padding: 0;
	display: flex;
	width: 100%;
	align-items: stretch;
}

.bookmark-title {
	font-size: 0.85em;
	overflow: hidden;
	text-overflow: ellipsis;
	height: 1.75em;
	white-space: nowrap;
}

.bookmark-text {
	display: flex;
	flex-direction: column;
}

.bookmark-info {
	flex: 4 1 180px;
	padding: 12px 14px 14px;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.bookmark-image {
	width: 33%;
	flex: 1 1 180px;
	display: block;
	position: relative;
	object-fit: cover;
	border-radius: 1px;
}

.bookmark-description {
	color: rgba(55, 53, 47, 0.6);
	font-size: 0.75em;
	overflow: hidden;
	max-height: 4.5em;
	word-break: break-word;
}

.bookmark-href {
	font-size: 0.75em;
	margin-top: 0.25em;
}

.sans { font-family: ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; }
.code { font-family: "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace; }
.serif { font-family: Lyon-Text, Georgia, ui-serif, serif; }
.mono { font-family: iawriter-mono, Nitti, Menlo, Courier, monospace; }
.pdf .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK JP'; }
.pdf:lang(zh-CN) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK SC'; }
.pdf:lang(zh-TW) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK TC'; }
.pdf:lang(ko-KR) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK KR'; }
.pdf .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.pdf .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK JP'; }
.pdf:lang(zh-CN) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK SC'; }
.pdf:lang(zh-TW) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK TC'; }
.pdf:lang(ko-KR) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK KR'; }
.pdf .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.highlight-default {
	color: rgba(55, 53, 47, 1);
}
.highlight-gray {
	color: rgba(120, 119, 116, 1);
	fill: rgba(120, 119, 116, 1);
}
.highlight-brown {
	color: rgba(159, 107, 83, 1);
	fill: rgba(159, 107, 83, 1);
}
.highlight-orange {
	color: rgba(217, 115, 13, 1);
	fill: rgba(217, 115, 13, 1);
}
.highlight-yellow {
	color: rgba(203, 145, 47, 1);
	fill: rgba(203, 145, 47, 1);
}
.highlight-teal {
	color: rgba(68, 131, 97, 1);
	fill: rgba(68, 131, 97, 1);
}
.highlight-blue {
	color: rgba(51, 126, 169, 1);
	fill: rgba(51, 126, 169, 1);
}
.highlight-purple {
	color: rgba(144, 101, 176, 1);
	fill: rgba(144, 101, 176, 1);
}
.highlight-pink {
	color: rgba(193, 76, 138, 1);
	fill: rgba(193, 76, 138, 1);
}
.highlight-red {
	color: rgba(212, 76, 71, 1);
	fill: rgba(212, 76, 71, 1);
}
.highlight-gray_background {
	background: rgba(241, 241, 239, 1);
}
.highlight-brown_background {
	background: rgba(244, 238, 238, 1);
}
.highlight-orange_background {
	background: rgba(251, 236, 221, 1);
}
.highlight-yellow_background {
	background: rgba(251, 243, 219, 1);
}
.highlight-teal_background {
	background: rgba(237, 243, 236, 1);
}
.highlight-blue_background {
	background: rgba(231, 243, 248, 1);
}
.highlight-purple_background {
	background: rgba(244, 240, 247, 0.8);
}
.highlight-pink_background {
	background: rgba(249, 238, 243, 0.8);
}
.highlight-red_background {
	background: rgba(253, 235, 236, 1);
}
.block-color-default {
	color: inherit;
	fill: inherit;
}
.block-color-gray {
	color: rgba(120, 119, 116, 1);
	fill: rgba(120, 119, 116, 1);
}
.block-color-brown {
	color: rgba(159, 107, 83, 1);
	fill: rgba(159, 107, 83, 1);
}
.block-color-orange {
	color: rgba(217, 115, 13, 1);
	fill: rgba(217, 115, 13, 1);
}
.block-color-yellow {
	color: rgba(203, 145, 47, 1);
	fill: rgba(203, 145, 47, 1);
}
.block-color-teal {
	color: rgba(68, 131, 97, 1);
	fill: rgba(68, 131, 97, 1);
}
.block-color-blue {
	color: rgba(51, 126, 169, 1);
	fill: rgba(51, 126, 169, 1);
}
.block-color-purple {
	color: rgba(144, 101, 176, 1);
	fill: rgba(144, 101, 176, 1);
}
.block-color-pink {
	color: rgba(193, 76, 138, 1);
	fill: rgba(193, 76, 138, 1);
}
.block-color-red {
	color: rgba(212, 76, 71, 1);
	fill: rgba(212, 76, 71, 1);
}
.block-color-gray_background {
	background: rgba(241, 241, 239, 1);
}
.block-color-brown_background {
	background: rgba(244, 238, 238, 1);
}
.block-color-orange_background {
	background: rgba(251, 236, 221, 1);
}
.block-color-yellow_background {
	background: rgba(251, 243, 219, 1);
}
.block-color-teal_background {
	background: rgba(237, 243, 236, 1);
}
.block-color-blue_background {
	background: rgba(231, 243, 248, 1);
}
.block-color-purple_background {
	background: rgba(244, 240, 247, 0.8);
}
.block-color-pink_background {
	background: rgba(249, 238, 243, 0.8);
}
.block-color-red_background {
	background: rgba(253, 235, 236, 1);
}
.select-value-color-interactiveBlue { background-color: rgba(35, 131, 226, .07); }
.select-value-color-pink { background-color: rgba(245, 224, 233, 1); }
.select-value-color-purple { background-color: rgba(232, 222, 238, 1); }
.select-value-color-green { background-color: rgba(219, 237, 219, 1); }
.select-value-color-gray { background-color: rgba(227, 226, 224, 1); }
.select-value-color-translucentGray { background-color: rgba(255, 255, 255, 0.0375); }
.select-value-color-orange { background-color: rgba(250, 222, 201, 1); }
.select-value-color-brown { background-color: rgba(238, 224, 218, 1); }
.select-value-color-red { background-color: rgba(255, 226, 221, 1); }
.select-value-color-yellow { background-color: rgba(253, 236, 200, 1); }
.select-value-color-blue { background-color: rgba(211, 229, 239, 1); }
.select-value-color-pageGlass { background-color: undefined; }
.select-value-color-washGlass { background-color: undefined; }

.checkbox {
	display: inline-flex;
	vertical-align: text-bottom;
	width: 16;
	height: 16;
	background-size: 16px;
	margin-left: 2px;
	margin-right: 5px;
}

.checkbox-on {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22%2358A9D7%22%2F%3E%0A%3Cpath%20d%3D%22M6.71429%2012.2852L14%204.9995L12.7143%203.71436L6.71429%209.71378L3.28571%206.2831L2%207.57092L6.71429%2012.2852Z%22%20fill%3D%22white%22%2F%3E%0A%3C%2Fsvg%3E");
}

.checkbox-off {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20x%3D%220.75%22%20y%3D%220.75%22%20width%3D%2214.5%22%20height%3D%2214.5%22%20fill%3D%22white%22%20stroke%3D%22%2336352F%22%20stroke-width%3D%221.5%22%2F%3E%0A%3C%2Fsvg%3E");
}

</style></head><body><article id="95514393-a5d2-4237-9615-b1d90b5ddee1" class="page sans"><header><h1 class="page-title">What to watch</h1><p class="page-description"></p></header><div class="page-body"><h2 id="5603a77d-4639-40ff-8357-e84d7d5c7564" class="">Описание API-методов</h2><h3 id="67a95440-d531-46ab-959a-922c6f6c88a4" class="">Регистрация пользователя <code>POST</code> <code>/api/register</code></h3><p id="979d030f-5cc7-4dfc-a9f5-9e2da317a837" class="">Пользователь заполняет форму регистрации указав Имя, email, пароль и подтверждение пароля.</p><p id="a36e88f4-e571-412a-8249-f8ef3f7bd220" class="">Дополнительно может быть загружен аватар.</p><p id="ab80df34-f845-4938-94b4-dac13dbc63ce" class=""><strong>Последовательность действий:</strong></p><ul id="fa9c13d7-2c9e-4861-9e19-3cf33773089f" class="bulleted-list"><li style="list-style-type:disc">Отправка post запроса с данными пользователя на endpoint регистрации.</li></ul><ul id="c8781fc8-73b5-44a5-a7d7-4239d15cd3fe" class="bulleted-list"><li style="list-style-type:disc">Валидация полученных полей. Проверка наличия обязательных полей и соответствия заданным правилам.</li></ul><ul id="13f42254-7380-4917-bf96-2201e3c05954" class="bulleted-list"><li style="list-style-type:disc">Проверка, что указанный email не занят.</li></ul><ul id="135bab77-941c-4f03-a5c1-26fbc74da946" class="bulleted-list"><li style="list-style-type:disc">Сохранение данных в БД, или возвращение списка ошибок при их наличии.</li></ul><ul id="b4de59e2-b2ee-4615-9f45-c590e07eaa72" class="bulleted-list"><li style="list-style-type:disc">Сохранение аватара в публичное хранилище и указание ссылки на файл в таблице пользователей.</li></ul><ul id="c2988c6e-43c1-4c77-b0a6-fe8f8c6bbea1" class="bulleted-list"><li style="list-style-type:disc">Возвращение токена для аутентификации пользователя под зарегистрированной учетной записью.</li></ul><p id="b6e9e567-e14c-4e30-b058-449e8556b420" class=""><strong>Правила валидации:</strong></p><table id="d89c7928-fb74-47cf-8931-a0a7aff45c9e" class="simple-table"><tbody><tr id="05c58346-8788-4458-9469-dad8256d815d"><td id="[@[M" class="">Поле</td><td id="Mt|m" class="">Тип</td><td id=";i&gt;I" class="">Обязательное</td><td id="KWV]" class="">Правила</td><td id="qiHi" class="">Пример</td></tr><tr id="7ca19d82-3dfa-4995-bb29-304d2f17f3cc"><td id="[@[M" class="">email</td><td id="Mt|m" class="">email</td><td id=";i&gt;I" class="">true</td><td id="KWV]" class="">уникальное</td><td id="qiHi" class=""><a href="mailto:email@example.com">email@example.com</a></td></tr><tr id="2f10e834-4973-4629-b810-460197948418"><td id="[@[M" class="">password</td><td id="Mt|m" class="">string</td><td id=";i&gt;I" class="">true</td><td id="KWV]" class="">min: 8</td><td id="qiHi" class="">12345678</td></tr><tr id="0067c8bb-78be-4540-90e2-515ccc886775"><td id="[@[M" class="">name</td><td id="Mt|m" class="">string</td><td id=";i&gt;I" class="">true</td><td id="KWV]" class="">max: 255</td><td id="qiHi" class="">John Doe</td></tr><tr id="8a521d1c-95bf-451c-8776-32b87e4d1bc3"><td id="[@[M" class="">file</td><td id="Mt|m" class="">file</td><td id=";i&gt;I" class="">false</td><td id="KWV]" class="">image, max: 10M</td><td id="qiHi" class=""></td></tr></tbody></table><h3 id="e701316b-2b89-4332-8c66-3ad8396ccac8" class="">Аутентификация <code>POST</code> <code>/api/login</code></h3><p id="490a8385-6648-4fdb-9373-4f92c2494f54" class="">Правила валидации:</p><p id="201ae1ac-21cd-4f0f-8817-1e843067b76d" class="">Пользователь заполняет форму авторизации, указав email и пароль.</p><ul id="cf62fe88-eca0-4ddc-8e6d-9d6d858e5e58" class="bulleted-list"><li style="list-style-type:disc">Отправка post запроса с данными пользователя на endpoint авторизации.</li></ul><ul id="afca14dd-b1e1-4b0a-a894-d6c868f793db" class="bulleted-list"><li style="list-style-type:disc">Валидация полученных полей. Проверка наличия обязательных полей и соответствия заданным правилам.</li></ul><ul id="82b259c3-1d2f-4f18-8759-c50e260cbcaf" class="bulleted-list"><li style="list-style-type:disc">Возвращение токена для аутентификации пользователя.</li></ul><p id="c78b8968-366b-49b4-8588-fd3e728e6bb1" class=""><strong>Правила валидации:</strong></p><table id="8909132e-e5ec-4904-ad40-1cd39b43a433" class="simple-table"><tbody><tr id="620af89e-e803-4251-b74e-ffdf05c21c5a"><td id="QSbW" class="">Поле</td><td id="pVW~" class="">Тип</td><td id="uxnN" class="">Обязательное</td><td id="kRcr" class="">Пример</td></tr><tr id="ee2eed31-9cef-441f-9d43-d7aee7070e56"><td id="QSbW" class="">email</td><td id="pVW~" class="">email</td><td id="uxnN" class="">true</td><td id="kRcr" class=""><a href="mailto:email@example.com">email@example.com</a></td></tr><tr id="1831f1af-2c73-43d0-81be-e5d26330a9e7"><td id="QSbW" class="">password</td><td id="pVW~" class="">string</td><td id="uxnN" class="">true</td><td id="kRcr" class="">12345678</td></tr></tbody></table><p id="3bc701c8-a32c-4ff2-9b80-c01f8d702828" class="">Метод возвращает токен аутентификации.</p><h3 id="4bfff57e-74c9-4941-9d1f-3e3a1e98ab83" class="">Получение профиля пользователя <code>GET</code> <code>/api/user</code></h3><p id="ccd50222-d54c-4f30-9a52-f63ccfd77c34" class="">Метод возвращает информацию о пользователе: имя, email, аватар и роль пользователя.</p><p id="69af7b33-ce81-406d-b564-1cf7176fa14a" class="">Метод доступен только аутентифицированному пользователю.</p><h3 id="60441077-6203-44da-a47d-6ef3ebac1499" class="">Обновление профиля пользователя <code>PATCH</code> <code>/api/user</code></h3><p id="303e837a-f14d-4a0a-b1da-c2400fbcd7ef" class="">С помощью данного метод пользователь может изменить свое имя, email, пароль или загрузить аватар.</p><p id="99d811b8-29a6-42d5-a50f-cedcf3a251d3" class=""><strong>Правила валидации:</strong></p><table id="50535622-8f5a-4a35-833b-f64f60aa2fcf" class="simple-table"><tbody><tr id="7c968c6a-7bb9-4123-8ca9-53da9d3488c0"><td id="S==J" class="">Поле</td><td id="gD=G" class="">Тип</td><td id="QvLB" class="">Обязательное</td><td id="tUbS" class="">Правила</td><td id="iwsh" class="">Пример</td></tr><tr id="a9c58aac-99c5-4da9-943d-9645570ba635"><td id="S==J" class="">email</td><td id="gD=G" class="">email</td><td id="QvLB" class="">true</td><td id="tUbS" class="">уникальное</td><td id="iwsh" class=""><a href="mailto:email@example.com">email@example.com</a></td></tr><tr id="a6220844-0b38-4b93-a4f9-647052562330"><td id="S==J" class="">password</td><td id="gD=G" class="">string</td><td id="QvLB" class="">false</td><td id="tUbS" class="">min: 8</td><td id="iwsh" class="">12345678</td></tr><tr id="93258a1d-7333-461e-9731-894cf83810fa"><td id="S==J" class="">name</td><td id="gD=G" class="">string</td><td id="QvLB" class="">true</td><td id="tUbS" class="">max: 255</td><td id="iwsh" class="">John Doe</td></tr><tr id="0ea85c0d-b578-42b6-bf4a-bb8f1ffe0be9"><td id="S==J" class="">file</td><td id="gD=G" class="">file</td><td id="QvLB" class="">false</td><td id="tUbS" class="">image, max: 10M</td><td id="iwsh" class=""></td></tr></tbody></table><p id="e8c4ba88-ad3d-47d4-ab84-4b674e4399eb" class="">Метод доступен только аутентифицированному пользователю.</p><h3 id="2e7878bb-f4cf-42eb-a2db-4c9ab76546f5" class="">Выход (logout) <code>POST</code> <code>/api/logout</code></h3><p id="6a63a0de-9399-47e7-aeda-383283f5d52a" class="">Отправка post запроса на endpoint выхода пользователя.</p><p id="31d52704-21cb-415b-ab7c-5bb52eb24e5b" class="">Уничтожение токена пользовательской аутентификации.</p><h3 id="1f3a6e66-ad2e-45fe-bb9f-f9d8b841237b" class="">Получение списка фильмов <code>GET</code> <code>/api/films</code></h3><p id="12b96d6f-3ec6-49a4-809b-94ac0097c865" class="">Страница представляет собой список по 8 фильмов с пагинацией.</p><p id="7a3199d7-9df9-4b4e-bfc2-c70c684100dc" class="">Информация о фильме содержит название, превью обложки (изображение для отображения в списке), превью видео (ссылка на превью) и другую дополнительную информацию для построения пагинации.</p><p id="4632a994-77e2-4f6f-9fff-cf1df20ab967" class="">Есть возможность отсортировать список по дате выхода и рейтингу фильма.</p><p id="d94234a0-2c90-45b7-9bcd-7a2c660a2b79" class="">По умолчанию фильмы сортируются по дате выхода, от новых к старым (desc).</p><p id="e71a599a-f08f-4027-9457-98fb3495c788" class="">Этот же endpoint может использоваться для получения списка фильмов по жанру.</p><ul id="a6e7c99b-9b80-4d25-bf64-b25c8c19fde1" class="bulleted-list"><li style="list-style-type:disc">Отправка get запроса на endpoint получения списка фильмов</li></ul><ul id="a0f518fc-1e0f-4666-b06d-02fa502c8917" class="bulleted-list"><li style="list-style-type:disc">Возвращение первых 8 фильмов, если не передано другое условие (параметр page)<ul id="77012df5-7876-4275-8f3d-b698fc98121d" class="bulleted-list"><li style="list-style-type:circle">Вместе со списком сериалов возвращаются параметры пагинации: количество элементов всего ссылка на первую страницу, на последнюю, на предыдущую и следующую</li></ul></li></ul><p id="81a27474-11e8-4018-95a2-0b8f9b99e7b8" class="">Дополнительно вместе с запросом могут быть переданы следующие параметры:</p><ul id="c96ff7f9-a559-41a4-8183-97e200adb5d8" class="bulleted-list"><li style="list-style-type:disc">page — номер страницы, для пагинации</li></ul><ul id="ceebd8dc-c1af-40a6-bd6f-a3f02ec72b72" class="bulleted-list"><li style="list-style-type:disc">genre — фильтрация по жанру</li></ul><ul id="52f91c95-e89d-4051-98ca-9ff2d5e077db" class="bulleted-list"><li style="list-style-type:disc">status — фильтрация по статусу, по умолчанию значение <code>ready</code>, пользователь с ролью модератор может изменить значение на (<code>pending</code>, <code>moderate</code>)</li></ul><ul id="784ddcdc-b744-4c6d-a39e-390799c1ac91" class="bulleted-list"><li style="list-style-type:disc">order_by — правило сортировки. Возможные значения: released, rating</li></ul><ul id="cbd561fb-c245-45f8-b3a0-f6307b7b1c91" class="bulleted-list"><li style="list-style-type:disc">order_to — направление сортировки. Возможные значения: asc, desc</li></ul><h3 id="eaa84fe2-1ce4-4d45-bbfd-6c32971db7bf" class="">Получение информации о фильме <code>GET</code> <code>/api/films/{id}</code></h3><p id="0ddf488b-4a03-48a1-b1be-55b53a7f5de4" class="">При получении информации о фильме с идентификатором <code>id</code> пользователь видит следующую информацию:</p><ul id="9f5e5ca9-509d-4666-8b30-23630550f9f7" class="bulleted-list"><li style="list-style-type:disc">Большой постер</li></ul><ul id="63f0629f-5ebe-440b-bb14-5ad7bbc733cd" class="bulleted-list"><li style="list-style-type:disc">Превью (маленькое изображение)</li></ul><ul id="2e97441a-8ce8-4f24-bd86-8542be9b2262" class="bulleted-list"><li style="list-style-type:disc">Обложка фильма</li></ul><ul id="c7a1be14-43b7-4eae-9f23-63f2549421eb" class="bulleted-list"><li style="list-style-type:disc">Цвет фона для карточки фильма</li></ul><ul id="f646f758-842d-49d1-830a-42e61ace0823" class="bulleted-list"><li style="list-style-type:disc">Название фильма</li></ul><ul id="2b03a627-c331-4d7e-885f-8e88887a1e2f" class="bulleted-list"><li style="list-style-type:disc">Жанры</li></ul><ul id="9594309b-2f91-4afe-a7a0-50ab83ee2e72" class="bulleted-list"><li style="list-style-type:disc">Год выхода на экраны</li></ul><ul id="9dfd04fa-caaf-4218-9965-89f2ddcd71f7" class="bulleted-list"><li style="list-style-type:disc">Описание</li></ul><ul id="95a42dbf-18a5-42b9-b3f4-7ece3223068d" class="bulleted-list"><li style="list-style-type:disc">Режиссёр</li></ul><ul id="8f98a39a-074d-4be5-99b2-9589b72d3d93" class="bulleted-list"><li style="list-style-type:disc">Список актёров</li></ul><ul id="bb11e77b-8976-4e0c-a959-55fc8a48b10d" class="bulleted-list"><li style="list-style-type:disc">Продолжительность фильма</li></ul><ul id="08247055-d17b-438b-a072-f0c42d64c94a" class="bulleted-list"><li style="list-style-type:disc">Ссылка на видео</li></ul><ul id="42675fd2-2d41-469e-bd1c-90545fd71375" class="bulleted-list"><li style="list-style-type:disc">Ссылка на превью видео</li></ul><ul id="67abd35c-190f-4d81-8d19-b63f5c759eee" class="bulleted-list"><li style="list-style-type:disc">Рейтинг фильма, в виде числа, к-во голосов</li></ul><p id="ed942463-b4b4-4bfe-9c18-bed21b115c49" class="">Если запрос выполняет авторизованный пользователь — в дополнение к другим данным, возвращается статус наличия фильма в избранном.</p><p id="29a36242-80b7-40d9-a886-580aea46d38a" class="">В случае попытки обращения к несуществующему фильму, ожидается возврат 404 ошибки.</p><h3 id="8f8986be-d963-4cb9-9897-0b801ec84f19" class="">Получение списка жанров <code>GET</code> <code>/api/genres</code></h3><p id="375617d7-441b-4e09-8bee-663ae1b1093e" class="">Технический endpoint. Для формирования списка жанров в форме поиска или каталоге.</p><h3 id="76317837-25cd-49cf-8167-9d576c6b5dad" class="">Редактирование жанра <code>PATCH</code> <code>/api/genres/{genre}</code></h3><p id="87ae9e9b-b1bf-4575-a4d1-9da8bd6c3506" class="">Метод доступен только аутентифицированному пользователю с ролью модератор.</p><h3 id="a0b4604e-f6fc-4ddb-a64c-80705e8b0e27" class="">Получение списка фильмов добавленных пользователем в избранное <code>GET</code> <code>/api/favorite</code></h3><p id="750a632f-aa1a-4da7-9a71-2df61a993b53" class="">Метод возвращает список фильмов, добавленных пользователем в избранное (список «К просмотру»).</p><p id="819a60d7-3fa3-460b-b439-0227a2cab632" class="">Формат и информация возвращаемая в этом списке аналогична методу для получения списка фильмов.</p><p id="8c37b9c8-343a-44e8-b52a-e5148a330e2a" class="">Фильмы возвращаются в порядке добавления пользователем в список, от новых к старым.</p><p id="ed945163-184a-404b-b6e9-95f514c29b36" class="">Метод доступен только аутентифицированному пользователю.</p><h3 id="665ab093-7db3-4c8c-bdcf-748f18d8965f" class="">Добавление фильма в избранное <code>POST</code> <code>/api/films/{id}/favorite/</code></h3><p id="ab187344-a73e-49fd-879d-ea8eb6c1dc52" class="">Метод принимает на вход <code>id</code> добавляемого фильма.</p><p id="3e8f127a-ac30-436a-8f6b-997384a69481" class="">В случае попытки добавления несуществующего фильма, ожидается возврат 404 ошибки.</p><p id="b76ee07b-3690-415f-b9b6-b8992b2d224b" class="">В случае попытки добавления в избранное фильма который уже присутствует в списке пользователя — ошибка 422, с соответствующим сообщением (<code>message</code>).</p><p id="c01a1d43-f660-43ce-a7b1-e79dca51e0f0" class="">Метод доступен только аутентифицированному пользователю.</p><h3 id="9569162f-dfe1-4c90-9ff5-be4714a2dae8" class="">Удаление фильма из избранного <code>DELETE</code> <code>/api/films/{id}/favorite/</code></h3><p id="b92977be-d305-4ce5-8384-f6f679c0204d" class="">Метод принимает на вход <code>id</code> удаляемого фильма.</p><p id="4f76a38b-4914-4a6c-9564-5a8821c5220f" class="">В случае попытки удаления несуществующего фильма, ожидается возврат 404 ошибки.</p><p id="1545fc22-a626-4fe1-8823-d93d6317d997" class="">В случае попытки удаления фильма, который отсутствует в списке пользователя, — ошибка 422, с соответствующим сообщением (<code>message</code>).</p><p id="18539851-a032-4ec6-8b97-cc2b484e3058" class="">Метод доступен только аутентифицированному пользователю.</p><h3 id="e2895356-1d18-4260-8c1f-1823a6e182a4" class="">Получение списка похожих фильмов <code>GET</code> <code>/api/films/{id}/similar</code></h3><p id="c6975bf1-8c30-4ccc-bc6d-bbf51a83816f" class="">Отправляя на роут получения похожих фильмов с указанием <code>id</code> фильма для которого запрашиваются похожие, метод возвращает список из 4 подходящих фильмов.</p><p id="8571106e-b896-445b-9465-fef1dd5269b3" class="">Похожесть определяется принадлежностью к тем же жанрам, что и исходный фильм (любым из имеющихся).</p><p id="2a2dcae0-6b7d-4f07-a45a-dfde7936d517" class="">Формат и информация возвращаемая в этом списке аналогична методу для получения списка фильмов.</p><h3 id="b135b8f3-7339-4e24-b210-28beae124b5f" class="">Получение списка отзывов к фильму <code>GET</code> <code>/api/comments/{id}</code></h3><p id="b227bc1e-b025-4b35-9a64-05963ff5d843" class="">Метод принимает на вход <code>id</code> фильма, в случае отсутствия такового — возвращается 404 ошибка.</p><p id="dd73eca1-a079-46c9-bc9c-d937c3e2afe6" class="">Возвращает список отзывов. Каждый отзыв содержит: текст отзыва, имя автора, дату написания отзыва. Также может содержать оценку.</p><p id="198ab403-5ccd-4cf0-9e30-88a45beb3893" class="">Отзывы, загруженные из внешнего источника, возвращаются в общем списке с именем автора «Гость» Отзывы отсортированы от наиболее новых к старым (desc).</p><h3 id="b77f2e5e-8be1-48ec-a672-40892935e41e" class="">Добавление отзыва к фильму <code>POST</code> <code>/api/comments/{id}</code></h3><p id="aa852179-7262-446c-881b-425a625f4977" class="">В качестве параметра в адресе указывается <code>id</code> фильма к которому добавляется комментарий.</p><p id="aa009830-dfec-4fa5-9d8e-e93cbbc18862" class="">Комментарий может быть добавлен отдельно, так и в ответ на другой, в этом случае в теле запроса указывается и <code>comment_id</code>.</p><p id="d30ffaac-16f4-42b9-8215-ad0c7de30ff5" class="">Добавление отзыва сопровождается выставлением оценки.</p><p id="10f31e04-09b9-44c6-9f5b-6389aa23d505" class="">Метод доступен только аутентифицированному пользователю.</p><p id="8db68577-27bf-4dc6-ac4c-c2a7c8bc498a" class=""><strong>Правила валидации:</strong></p><table id="56f305a6-bace-4b26-85d2-f5168d48ca1f" class="simple-table"><tbody><tr id="7692a50b-a13f-4862-ada4-9b57dc901832"><td id="N_K=" class="">Поле</td><td id="TxMG" class="">Тип</td><td id="e;`&gt;" class="">Обязательное</td><td id="L&gt;uZ" class="">Правила</td><td id="OPD^" class="">Пример</td></tr><tr id="f126bb7c-e55d-4084-a9e4-59dc1ff7049a"><td id="N_K=" class="">text</td><td id="TxMG" class="">string</td><td id="e;`&gt;" class="">true</td><td id="L&gt;uZ" class="">min: 50, max: 400</td><td id="OPD^" class="">Discerning travellers and Wes Anderson fans will luxuriate in the glorious Mittel-European kitsch of one of the director’s funniest and most exquisitely designed movies in years.</td></tr><tr id="b97633dc-70ed-40bc-ac13-4a8f621af4c7"><td id="N_K=" class="">rating</td><td id="TxMG" class="">int</td><td id="e;`&gt;" class="">true</td><td id="L&gt;uZ" class="">min: 1, max: 10</td><td id="OPD^" class="">8</td></tr><tr id="601cbf89-672f-4250-99c7-40e21fd2b2f6"><td id="N_K=" class="">comment_id</td><td id="TxMG" class="">int</td><td id="e;`&gt;" class="">false</td><td id="L&gt;uZ" class="">exists</td><td id="OPD^" class="">1</td></tr></tbody></table><h3 id="a6f50ac9-8cb1-4ef5-b847-b7c33e5d0303" class="">Редактирование комментария <code>PATCH</code> <code>/api/comments/{comment}</code></h3><p id="4401a75f-f3e2-4f6e-a12a-c22d52901159" class="">Метод доступен только аутентифицированному пользователю.</p><p id="70d6edf7-3af7-4972-b11b-4389d4bdcb44" class="">Пользователь может отредактировать <em>свой</em> комментарий.</p><p id="c61d0855-0b81-41d6-9af5-4e45596c80d0" class="">Модератор может отредактировать <em>любой</em> комментарий.</p><p id="5229fe3b-2f9e-4626-bd0e-0a2aa3a9bc56" class=""><strong>Правила валидации:</strong></p><table id="d932439a-6ae9-441a-8586-429339ca5698" class="simple-table"><tbody><tr id="ae2c868f-7a62-4682-91b6-1464a5738481"><td id="fPXj" class="">Поле</td><td id="kZSe" class="">Тип</td><td id="ZHge" class="">Обязательное</td><td id="ZdBx" class="">Правила</td><td id="NV;P" class="">Пример</td></tr><tr id="61d938de-190b-45c2-a5fc-3b5d439c2e96"><td id="fPXj" class="">text</td><td id="kZSe" class="">string</td><td id="ZHge" class="">true</td><td id="ZdBx" class="">min: 50, max: 400</td><td id="NV;P" class="">Discerning travellers and Wes Anderson fans will luxuriate...</td></tr><tr id="361b2bca-6185-44f6-a5a4-1306444bd33a"><td id="fPXj" class="">rating</td><td id="kZSe" class="">int</td><td id="ZHge" class="">false</td><td id="ZdBx" class="">min: 1, max: 10</td><td id="NV;P" class="">3</td></tr></tbody></table><h3 id="6579c245-f3e3-4854-8ccf-38a418670fa5" class="">Удаление комментария <code>DELETE</code> <code>/api/comments/{comment}</code></h3><p id="077e1fff-9ea0-4d28-bcc9-75f7f625015e" class="">Метод доступен только аутентифицированному пользователю.</p><p id="db4e5c23-72cd-41e9-9ee8-e8329abca697" class="">Пользователь может удалить <em>свой</em> комментарий, при условии, что комментарий не содержит ответов.</p><p id="af01a31e-d986-4a87-8667-3831000b04fd" class="">Модератор может удалить <em>любой</em> комментарий.</p><p id="f291ec09-34d9-4554-a90e-d07421d6f97c" class="">При удалении комментария, имеющего ответы, удаляются все его потомки.</p><h3 id="52e5449b-9932-4f58-909e-464b3f3e65cc" class="">Получение промо-фильма <code>GET</code> <code>/api/promo</code></h3><p id="8b7391d9-e6a9-4d22-886f-caa8f7e79424" class="">Метод, возвращающий фильм, являющийся продвигаемым на данный момент (promo).</p><p id="12a4d5ac-9b00-42fb-b726-90702eb0f7c7" class="">Формат и информация возвращаемая в этом списке аналогична методу для получения информации о фильме.</p><h3 id="da66e41c-3556-4967-b050-800188b51c6a" class="">Установка промо-фильма <code>POST</code> <code>/api/promo/{id}</code></h3><p id="07f5fe18-4b0d-4788-a7a9-fbbf85f702d1" class="">Метод доступен только аутентифицированному пользователю с ролью модератор.</p><p id="5d79094c-2b0d-42ef-8b38-c66644f5fa21" class="">При отсутствии запрошенного в роуте фильма в базе, на запрос возвращается 404 ошибка.</p><h3 id="1cf107ff-5128-408f-8cec-48c40e15a08e" class="">Добавление фильма в базу <code>POST</code> <code>/api/films</code></h3><p id="7d18a296-9658-465b-a27d-f86679dc4aab" class="">Модератор указывает в форме идентификатор фильма с сайта imdb вида tt0111161.</p><p id="12f90137-94d3-4d98-a2fa-42971184e4d1" class="">Создается фоновая задача, которая запрашивает данные о фильме из внешнего источника, и обновляет информацию о фильме в базе.</p><p id="ad2dffb0-530d-4950-b84a-f3aaf7459eab" class="">В момент создания заявки, фильм сохраняется только с imdb_id и статусом «в ожидании» (pending).</p><p id="9f651eab-1a5e-4d35-b0ee-c7fd0ec1754d" class="">После загрузки данных, статус меняется на «на модерации» (moderate). Модератор может получить список фильмов с этим статусом, отредактировать его, заполнить недостающие поля, указать ссылки на видео и прочее, после чего поставить статус «готов» (ready) — после чего фильм будет доступен пользователям.</p><p id="23e1aa72-c2b7-4169-a963-368a57e45011" class="">Для получения информации о фильме можно использовать сервис <a href="http://www.omdbapi.com/">http://www.omdbapi.com</a> (или api htmlacademy)</p><p id="713abde3-7f93-446d-bd3f-7c6015bbab7d" class="">Метод доступен только аутентифицированному пользователю с ролью модератор.</p><p id="a73756c6-e260-4235-aba6-ecb7374e6117" class=""><strong>Правила валидации:</strong></p><table id="7ddccf55-b8ae-45a3-8e5e-8d4a3d2a8beb" class="simple-table"><tbody><tr id="d1d7e720-f50a-4eb4-ae18-deb36ae75cbc"><td id="&gt;LIc" class="">Поле</td><td id="H`&lt;|" class="">Тип</td><td id="gUas" class="">Обязательное</td><td id="btor" class="">Правила</td><td id="um{T" class="">Пример</td></tr><tr id="fe528fe0-0c11-4a80-b0fa-d9a164d52c30"><td id="&gt;LIc" class="">imdb_id</td><td id="H`&lt;|" class="">string</td><td id="gUas" class="">true</td><td id="btor" class="">уникальное, проверка формата ttXXX</td><td id="um{T" class="">tt0944947</td></tr></tbody></table><p id="2ae9c7df-0c6e-429b-821d-f3721bd477a5" class="">При заполнении поля imdb_id и наличии фильма с таким id в базе — возвращается ошибка валидации 422.</p><p id="d657431e-f1f4-403a-9645-ac1372c3bec4" class="">При сохранении проверяем наличие связанных жанров и создаем при отсутствии.</p><h3 id="30f993c4-4c44-4da3-99eb-617e5127fbf7" class="">Редактирование фильма <code>PATCH</code> <code>/api/films/{id}</code></h3><p id="290fdd26-3f0a-49af-9048-636d20a6d764" class="">Модератор может изменить информацию о фильме или заполнить недостающие данные после добавления фильма.</p><p id="d2209224-a625-4d5d-8b70-23cb18c208e1" class="">Метод доступен только аутентифицированному пользователю с ролью модератор.</p><p id="e2211f37-a385-418f-9ddc-d76fba31ca47" class=""><strong>Правила валидации:</strong></p><table id="96b2cf84-6e55-4f82-8b48-1a13818a953e" class="simple-table"><tbody><tr id="40c8d643-df10-4f79-9dbf-8075375ee6f0"><td id="a\rY" class="">Поле</td><td id="D?yH" class="">Тип</td><td id="ihge" class="">Обязательное</td><td id="&gt;WoW" class="">Правила</td><td id="BtJ]" class="">Пример</td></tr><tr id="00a7ea39-3de7-414a-a83d-8ada2bb7fac6"><td id="a\rY" class="">name</td><td id="D?yH" class="">string</td><td id="ihge" class="">true</td><td id="&gt;WoW" class="">max: 255</td><td id="BtJ]" class="">The Grand Budapest Hotel</td></tr><tr id="6c1fa960-6992-4196-9963-88ca45058e15"><td id="a\rY" class="">poster_image</td><td id="D?yH" class="">string</td><td id="ihge" class="">false</td><td id="&gt;WoW" class="">max: 255</td><td id="BtJ]" class="">img/the-grand-budapest-hotel-poster.jpg</td></tr><tr id="067bab61-7524-4d4f-8f42-1daabcb568ba"><td id="a\rY" class="">preview_image</td><td id="D?yH" class="">string</td><td id="ihge" class="">false</td><td id="&gt;WoW" class="">max: 255</td><td id="BtJ]" class="">img/the-grand-budapest-hotel.jpg</td></tr><tr id="0be12f36-6648-4b53-a3f8-aa79d8184a9e"><td id="a\rY" class="">background_image</td><td id="D?yH" class="">string</td><td id="ihge" class="">false</td><td id="&gt;WoW" class="">max: 255</td><td id="BtJ]" class="">img/the-grand-budapest-hotel-bg.jpg</td></tr><tr id="2c354540-2c14-4be6-bc33-42fb7047e0fe"><td id="a\rY" class="">background_color</td><td id="D?yH" class="">string</td><td id="ihge" class="">false</td><td id="&gt;WoW" class="">max: 9</td><td id="BtJ]" class="">#ffffff</td></tr><tr id="7646379e-85cd-4ea8-aa87-b12c62cdaee2"><td id="a\rY" class="">video_link</td><td id="D?yH" class="">string</td><td id="ihge" class="">false</td><td id="&gt;WoW" class="">max: 255</td><td id="BtJ]" class=""><a href="https://some-link/">https://some-link</a></td></tr><tr id="0de78dbb-038f-4656-a44b-a22814b62614"><td id="a\rY" class="">preview_video_link</td><td id="D?yH" class="">string</td><td id="ihge" class="">false</td><td id="&gt;WoW" class="">max: 255</td><td id="BtJ]" class=""><a href="https://some-link/">https://some-link</a></td></tr><tr id="632d1230-75d5-4268-96ed-2c44cbcf2fbc"><td id="a\rY" class="">description</td><td id="D?yH" class="">string</td><td id="ihge" class="">false</td><td id="&gt;WoW" class="">max: 1000</td><td id="BtJ]" class="">In the 1930s, the Grand Budapest Hotel is a popular European ski resort, presided over by concierge Gustave H. (Ralph Fiennes). Zero, a junior lobby boy, becomes Gustave’s friend and protege.</td></tr><tr id="f8939d1e-ad9b-473c-8a23-31813fc8d115"><td id="a\rY" class="">director</td><td id="D?yH" class="">string</td><td id="ihge" class="">false</td><td id="&gt;WoW" class="">max: 255</td><td id="BtJ]" class="">Wes Anderson</td></tr><tr id="a7122afc-3866-48a8-96b2-8fd75db65117"><td id="a\rY" class="">starring</td><td id="D?yH" class="">array</td><td id="ihge" class="">false</td><td id="&gt;WoW" class=""></td><td id="BtJ]" class="">[«Bill Murray», «Edward Norton», «Jude Law», «Willem Dafoe», «Saoirse Ronan»]</td></tr><tr id="1d0b3ed9-afaa-48cd-ba7b-7d4f619521a8"><td id="a\rY" class="">genre</td><td id="D?yH" class="">array</td><td id="ihge" class="">false</td><td id="&gt;WoW" class=""></td><td id="BtJ]" class="">[«Comedy»]</td></tr><tr id="d77b1efc-772f-4caa-9037-5dc052f67ba6"><td id="a\rY" class="">run_time</td><td id="D?yH" class="">int</td><td id="ihge" class="">false</td><td id="&gt;WoW" class=""></td><td id="BtJ]" class="">99</td></tr><tr id="e0ce9b2f-50d4-40d0-94a1-727ad725e547"><td id="a\rY" class="">released</td><td id="D?yH" class="">int</td><td id="ihge" class="">false</td><td id="&gt;WoW" class=""></td><td id="BtJ]" class="">2014</td></tr><tr id="d99361bb-3c1e-4635-bea2-849e862bcad6"><td id="a\rY" class="">imdb_id</td><td id="D?yH" class="">string</td><td id="ihge" class="">true</td><td id="&gt;WoW" class="">уникальное, проверка формата ttXXX</td><td id="BtJ]" class="">tt0944947</td></tr><tr id="375d898c-7041-4e46-a4f8-c4db054cee4e"><td id="a\rY" class="">status</td><td id="D?yH" class="">string</td><td id="ihge" class="">true</td><td id="&gt;WoW" class="">статус из списка: pending, on moderation, ready</td><td id="BtJ]" class="">ready</td></tr></tbody></table><p id="641e7c64-666f-47a8-a4a7-fd347a6e170a" class="">При отсутствии запрошенного в роуте фильма в базе, возвращается 404 ошибка.</p></div></article></body></html>
