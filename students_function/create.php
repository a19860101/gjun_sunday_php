<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
        <form action="store.php" method="post">
            <fieldset>
            <legend>新增學員資料</legend>
                <div>
                    <label for="name">姓名</label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="email">EMAIL</label>
                    <input type="text" name="email" id="email">
                </div>
                <div>
                    <label for="edu">教育程度</label>
                    <select name="edu" id="edu">
                        <option value="">--請選擇--</option>
                        <option value="國小">國小</option>
                        <option value="國中">國中</option>
                        <option value="高中職">高中職</option>
                        <option value="大專院校">大專院校</option>
                        <option value="研究所以上">研究所以上</option>
                    </select>
                </div>
                <div>
                    性別
                    <input type="radio" name="gender" value="男" id="male">
                    <label for="male">男</label>

                    <input type="radio" name="gender" value="女" id="female">
                    <label for="female">女</label>

                    <input type="radio" name="gender" value="不公開" id="hide" checked>
                    <label for="hide">不公開</label>
                </div>
                <div>
                    技能
                    <input type="checkbox" name="skills[]" id="design" value="設計">
                    <label for="design">設計</label>

                    <input type="checkbox" name="skills[]" id="web" value="網頁">
                    <label for="web">網頁</label>
                    
                    <input type="checkbox" name="skills[]" id="threed" value="3D">
                    <label for="threed">3D</label>
                </div>
                <input type="submit" value="送出">
                <input type="button" value="取消" onclick="history.back()">
            </fieldset>
        </form>
    </div>
</body>
</html>