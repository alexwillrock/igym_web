<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/MyWrapper.css">
	<link rel="stylesheet" type="text/css" href="./css/MyLogInSection.css">
	<link rel="stylesheet" type="text/css" href="./css/MainBody.css">
	<link rel="stylesheet" type="text/css" href="./css/MyRegSection.css">
	<link rel="stylesheet" type="text/css" href="./css/MyLogoDemo.css">
	<title>
		моя маленькая качалка
	</title>
</head>
<body id="MainBody">
	<section id="MyWrapper">
	    <table id="MyWrapperTable">

            <tr>
                <td rowspan="2">
                    <section id="MyLogoDemo">

                    </section>
                </td>

                <td>
                    <section id="MyLogInSection">
                        <table id="MyLogInTable">
                            <tr>
                                <td colspan="2">
                                    <input type="text" id="MyLogIn" class="MyLogClass" value="Псевдоним или адрес электронной почты">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" id="MyPassword" class="MyLogClass">
                                <td>
                                    <button id="MyLogInButton">Войти</button>
                                </td>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p id="RememberMeChecked"><input type="checkbox" name="1" value="1">Запомнить меня</p>
                                </td>
                                <td>
                                    <button id="MyRememberPassword">Забыли пароль ?</button>
                                </td>
                            </tr>
                        </table>
                     </section>
                </td>
            </tr>
            <tr>
                <td>
                    <section id="MyRegSection">
                        <table id="MyRegTable">
                            <tr>
                                <td>
                                    <label id="FirstVisit">Впервые у нас ?</label>
                                </td>
                                <td>
                                    <label id="FirstVisitConnect">Присоединяйся</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="text" id="MyRegLogIn" class="MyRegClass">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="email" id="MyRegEmail" class="MyRegClass">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="text" id="MyRegPassword" class="MyRegClass">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" id="MyRegPasswordRepeat" class="MyRegClass">
                                </td>
                                <td>
                                    <button id="MyRegButton">Регистрация</button>
                                </td>
                            </tr>
                        </table>
                    </section>
                </td>
            </tr>
        </table>

	</section>
</body>
</html>