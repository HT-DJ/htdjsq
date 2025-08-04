<?php $_0=['siteName'=>'国家服务门户','slogan'=>'便民利民 · 服务社会','footerText'=>'© 2023 国家服务门户 - 弘扬社会主义核心价值观'];$_1=['国家政务'=>[['name'=>'中国政府网','url'=>'https://www.gov.cn','desc'=>'国务院官方门户网站'],['name'=>'国家政务服务平台','url'=>'https://gjzwfw.www.gov.cn','desc'=>'全国"一网通办"服务入口'],['name'=>'全国人民代表大会','url'=>'https://www.npc.gov.cn','desc'=>'国家立法机关官网']],'地方政务'=>[['name'=>'北京市政府','url'=>'https://www.beijing.gov.cn','desc'=>'首都政务服务门户'],['name'=>'上海市政府','url'=>'https://www.shanghai.gov.cn','desc'=>'上海市政务服务平台'],['name'=>'广东省政府','url'=>'https://www.gd.gov.cn','desc'=>'广东省政务门户']],'专项服务'=>[['name'=>'教育部','url'=>'https://www.moe.gov.cn','desc'=>'国家教育政策服务平台'],['name'=>'人社部','url'=>'https://www.mohrss.gov.cn','desc'=>'人力资源和社会保障服务'],['name'=>'科技部','url'=>'https://www.most.gov.cn','desc'=>'科学技术创新服务平台']]];$_2=['国家层面'=>['富强','民主','文明','和谐'],'社会层面'=>['自由','平等','公正','法治'],'个人层面'=>['爱国','敬业','诚信','友善']];$_3=['富强'=>'国家繁荣昌盛，人民生活富裕','民主'=>'人民当家作主，社会公平正义','文明'=>'社会进步和谐，文化繁荣发展','和谐'=>'人与自然和谐，社会安定有序','自由'=>'公民权利保障，个性全面发展','平等'=>'社会机会均等，人格尊严平等','公正'=>'制度公平正义，权益得到保障','法治'=>'依法治国理政，社会规范有序','爱国'=>'热爱祖国人民，维护国家利益','敬业'=>'恪尽职守奉献，精益求精进取','诚信'=>'诚实守信立身，履约践诺行事','友善'=>'互助友爱待人，和谐人际关系'];?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_0['siteName'];?></title>
    <meta name="description" content="国家服务门户：整合政务服务、社会主义核心价值观宣传和便民互动功能">
    <meta name="keywords" content="政务服务,社会主义核心价值观,便民服务,国家门户">
    
    <!-- 引入Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #165DFF 0%, #36CFC9 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .value-message {
            position: fixed;
            z-index: 100;
            font-weight: bold;
            opacity: 0;
            transition: all 0.5s;
            pointer-events: none;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- 导航栏 -->
    <header class="fixed w-full bg-white/80 backdrop-blur-md shadow-sm z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fa fa-star text-blue-600 text-2xl"></i>
                <span class="text-xl font-bold"><?php echo $_0['siteName'];?></span>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="#home" class="hover:text-blue-600 transition-colors">首页</a>
                <a href="#services" class="hover:text-blue-600 transition-colors">政务服务</a>
                <a href="#values" class="hover:text-blue-600 transition-colors">核心价值观</a>
            </nav>
            <button class="md:hidden text-xl">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- 英雄区域 -->
    <section id="home" class="gradient-bg pt-28 pb-20 md:pt-36 md:pb-32">
        <div class="container mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                国家服务门户
            </h1>
            <p class="text-xl max-w-2xl mx-auto opacity-90 mb-8">
                <?php echo $_0['slogan'];?>
            </p>
            <div class="flex justify-center space-x-4">
                <a href="#services" class="bg-white text-blue-600 px-6 py-3 rounded-full font-medium hover:shadow-lg transition-all">
                    政务服务 <i class="fa fa-arrow-right ml-2"></i>
                </a>
                <a href="#values" class="bg-white/10 text-white px-6 py-3 rounded-full font-medium hover:bg-white/20 transition-all">
                    核心价值观
                </a>
            </div>
        </div>
    </section>

    <!-- 政务服务区 -->
    <section id="services" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 relative">
                <span class="relative z-10">政务服务快捷入口</span>
                <span class="absolute left-1/2 -bottom-3 -translate-x-1/2 w-20 h-1 bg-blue-600 rounded-full"></span>
            </h2>
            
            <?php foreach($_1 as $_4=>$_5):?>
            <div class="mb-16">
                <h3 class="text-2xl font-semibold mb-6 text-gray-800"><?php echo $_4;?></h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach($_5 as $_6):?>
                    <div class="bg-gray-50 rounded-lg p-6 card-hover border border-gray-200">
                        <div class="flex items-center mb-4">
                            <i class="fa fa-external-link text-blue-600 mr-3"></i>
                            <a href="<?php echo $_6['url'];?>" target="_blank" class="text-xl font-semibold hover:text-blue-600 transition-colors">
                                <?php echo $_6['name'];?>
                            </a>
                        </div>
                        <p class="text-gray-600"><?php echo $_6['desc'];?></p>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </section>

    <!-- 核心价值观区 -->
    <section id="values" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 relative">
                <span class="relative z-10">社会主义核心价值观</span>
                <span class="absolute left-1/2 -bottom-3 -translate-x-1/2 w-20 h-1 bg-blue-600 rounded-full"></span>
            </h2>
            
            <?php foreach($_2 as $_4=>$_7):?>
            <div class="mb-16">
                <h3 class="text-2xl font-semibold mb-6 text-center text-gray-800"><?php echo $_4;?></h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <?php foreach($_7 as $_8):?>
                    <div class="bg-white rounded-xl shadow-md p-6 text-center card-hover">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa fa-heart text-blue-600 text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2"><?php echo $_8;?></h4>
                        <p class="text-gray-500 text-sm">
                            <?php echo $_3[$_8];?>
                        </p>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </section>

    <!-- 互动彩蛋区 -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">互动体验</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                点击页面任意位置，随机展示社会主义核心价值观词汇
            </p>
            <div class="bg-gray-50 rounded-xl p-8 max-w-md mx-auto card-hover">
                <i class="fa fa-magic text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">点击彩蛋</h3>
                <p class="text-gray-500 mb-4">在页面空白处点击试试看</p>
                <button onclick="showAlert()" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-colors">
                    查看公告
                </button>
            </div>
        </div>
    </section>

    <!-- 页脚 -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fa fa-star text-blue-400 text-xl"></i>
                        <span class="text-lg font-bold"><?php echo $_0['siteName'];?></span>
                    </div>
                    <p class="text-gray-400 text-sm"><?php echo $_0['footerText'];?></p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <i class="fa fa-weixin text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <i class="fa fa-weibo text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <i class="fa fa-globe text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- 互动彩蛋脚本 -->
    <script>
        // 核心价值观词汇
        const coreWords = [
            "富强", "民主", "文明", "和谐", 
            "自由", "平等", "公正", "法治",
            "爱国", "敬业", "诚信", "友善"
        ];

        // 点击特效
        document.addEventListener('click', function(e) {
            if (e.target.tagName !== 'A' && e.target.tagName !== 'BUTTON' && !e.target.closest('a')) {
                const word = coreWords[Math.floor(Math.random() * coreWords.length)];
                const message = document.createElement('div');
                message.className = 'value-message';
                message.textContent = word;
                message.style.left = `${e.clientX}px`;
                message.style.top = `${e.clientY}px`;
                message.style.color = `hsl(${Math.random() * 360}, 70%, 50%)`;
                document.body.appendChild(message);
                
                setTimeout(() => {
                    message.style.opacity = '1';
                    message.style.transform = 'translateY(-30px)';
                }, 10);
                
                setTimeout(() => {
                    message.style.opacity = '0';
                    message.style.transform = 'translateY(-60px)';
                    setTimeout(() => message.remove(), 500);
                }, 1000);
            }
        });

        // 公告功能
        function showAlert() {
            alert("欢迎访问国家服务门户！\n\n本网站整合政务服务资源，弘扬社会主义核心价值观。\n\n如有建议请联系我们。\n\n网站作者QQ号:2593292106");
        }

        // 导航栏滚动效果
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle('shadow', window.scrollY > 50);
            header.classList.toggle('py-3', window.scrollY <= 50);
            header.classList.toggle('py-2', window.scrollY > 50);
        });
    </script>
</body>
</html>