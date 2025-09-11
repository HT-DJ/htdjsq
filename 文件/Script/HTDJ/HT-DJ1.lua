local OrionLib = loadstring(game:HttpGet("https://raw.githubusercontent.com/useranewrff/roblox/main/%E9%BB%91%E9%87%91.lua"))()

local Window = OrionLib:MakeWindow({Name = "HT-DJ", HidePremium = false, SaveConfig = true,IntroText = "HT-DJ", ConfigFolder = "HT-DJ"})

game:GetService("StarterGui"):SetCore("SendNotification",{ Title = "HT-DJ"; Text ="HT-DJ"; Duration = 5; })

local about = Window:MakeTab({
    Name = "所有者HT-DJ",
    Icon = "rbxassetid://13519683179",
    PremiumOnly = false

})

about:AddParagraph("该脚本为免费脚本","如果你是买来的那么恭喜你你被骗了")
about:AddParagraph("您的注入器:"," "..identifyexecutor().."")
about:AddParagraph("您当前服务器的ID"," "..game.GameId.."")

local Tab =Window:MakeTab({
	Name = "公告",
	Icon = "rbxassetid://13519683179",
	PremiumOnly = false
})

Tab:AddButton({
	Name = "复制QQ群",
	Callback = function()
     setclipboard("QQ群null")
  	end
})

Tab:AddButton({
	Name = "快手号",
	Callback = function()
     setclipboard("快手号null")
    end
})

Tab:AddButton({
	Name = "哔哩哔哩",
	Callback = function()
    setclipboard("bilibilinull")
    end
})

local Tab =Window:MakeTab({
	Name = "手机注入器网址(进不去开vpn)",
	Icon = "rbxassetid://13519683179",
	PremiumOnly = false
})

Tab:AddButton({
	Name = "fluxus",
	Callback = function()
    setclipboard("https://fluxteam.cc")
    end
})

Tab:AddButton({
	Name = "vage",
	Callback = function()
    setclipboard("VegaX.gg")
    end
})

Tab:AddButton({
	Name = "Arceus x(阿尔宙斯)",
	Callback = function()
    setclipboard("https://spdmteam.com")
    end
})

Tab:AddButton({
	Name = "Delta(忍者)",
	Callback = function()
    setclipboard("https://deltaexector.com/")
    end
})

Tab:AddButton({
	Name = "codex",
	Callback = function()
    setclipboard("https://codex.lol/")
    end
})

local Tab =Window:MakeTab({
	Name = "HT",
	Icon = "rbxassetid://13519683179",
	PremiumOnly = false
})

Tab:AddButton({
	Name = "该脚本处于测试阶段",
	Callback = function()
    loadstring(game:HttpGet(""))()
    end
})

local Section = Tab:AddSection({
	Name = "该脚本处于测试阶段 目前还没有可用的功能"
})

Tab:AddButton({
	Name = "UI测试",
    Callback = function()
    loadstring(game:HttpGet(""))()
    end
})