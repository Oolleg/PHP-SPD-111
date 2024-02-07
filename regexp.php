<div class="row">
    <div class="row">
        <div class="col s6 center-align">
            <h5>1. Якоря</h5>
        </div>
        <div class="col s6 center-align">
            <h5>2. Символьные классы</h5>
        </div>
    </div>
    <div class="col s6">

        <table class="centered striped">
            <thead>
                <tr>
                    <th>Метасимвол</th>
                    <th>Назначение</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>^</td>
                    <td>начало строки</td>
                </tr>
                <tr>
                    <td>$</td>
                    <td>конец строки</td>
                </tr>
                <tr>
                    <td>\b</td>
                    <td>граница слова</td>
                </tr>
                <tr>
                    <td>\B</td>
                    <td>не граница слова</td>
                </tr>
                <tr>
                    <td>\A</td>
                    <td>начало текста</td>
                </tr>
                <tr>
                    <td>\Z</td>
                    <td>конец текста</td>
                </tr>
                <tr>
                    <td>\< </td>
                    <td>начало слова</td>
                </tr>

                <tr>
                    <td>\></td>
                    <td>конец слова</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col s6">
        <div>

        </div>
        <table class="centered striped">
            <thead>
                <tr>
                    <th>Метасимвол</th>
                    <th>Назначение</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>\d</td>
                    <td>цифровой символ</td>
                </tr>
                <tr>
                    <td>\D</td>
                    <td>нецифровой символ</td>
                </tr>
                <tr>
                    <td>\s</td>
                    <td>символ пробела</td>
                </tr>
                <tr>
                    <td>\S</td>
                    <td>непробельный символ</td>
                </tr>
                <tr>
                    <td>\w</td>
                    <td>буквенно-цифровой символ или знак подчёркивания</td>
                </tr>
                <tr>
                    <td>\W</td>
                    <td>любой символ, кроме буквенного, цифрового или знака подчёркивания</td>
                </tr>
                <tr>
                    <td>\с</td>
                    <td>управляющий символ</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="row">
        <div class="col s6 center-align">
            <h5>3. Группы</h5>
        </div>
        <div class="col s6 center-align">
            <h5>4. Кванторы</h5>
        </div>
    </div>

    <div class="col s6">

        <table class="centered striped">
            <thead>
                <tr>
                    <th>Метасимвол</th>
                    <th>Назначение</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>.</td>
                    <td>любой символ</td>
                </tr>
                <tr>
                    <td>[abc]</td>
                    <td>любой из перечисленных (a,b, или c)</td>
                </tr>
                <tr>
                    <td>[^abc]</td>
                    <td>любой, кроме перечисленных (не a,b, c)</td>
                </tr>
                <tr>
                    <td>[a-zA-Z]</td>
                    <td>слияние диапазонов (латинские символы от a до z без учета регистра )</td>
                </tr>
                <tr>
                    <td>[a-d[m-p]]</td>
                    <td>объединение символов (от a до d и от m до p)</td>
                </tr>
                <tr>
                    <td>[0-7]</td>
                    <td>цифра между 0 и 7</td>
                </tr>
                <tr>
                    <td>\n</td>
                    <td>n-ая группа/подшаблон</td>
                </tr>
                <tr>
                    <td>(a|b)</td>
                    <td>n-ая группа/подшаблон</td>
                </tr>
                <tr>
                    <td>(...)</td>
                    <td>группа</td>
                </tr>
                <tr>
                    <td>(?:...)</td>
                    <td>пассивная группа</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col s6">

        <table class="centered striped">
            <thead>
                <tr>
                    <th>Метасимвол</th>
                    <th>Назначение</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>?</td>
                <td>0 или 1</td>
            </tr>
            <tr>
                <td>*</td>
                <td>0 или более раз</td>
            </tr>
            <tr>
                <td>*?</td>
                <td>0 или более раз, нежадный</td>
            </tr>
            <tr>
                <td>+</td>
                <td>1 или более раз</td>
            </tr>
            <tr>
                <td>+?</td>
                <td>1 или более раз, нежадный</td>
            </tr>
            <tr>
                <td>??</td>
                <td>0 или 1 раз, нежадный</td>
            </tr>
            <tr>
                <td>{n}</td>
                <td>n раз</td>
            </tr>
            <tr>
                <td>{n,}</td>
                <td>n раз и более</td>
            </tr>
            <tr>
                <td>{n,m}</td>
                <td>не менее n раз и не более m раз</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>