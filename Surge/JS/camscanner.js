/**
 * 扫描全能王 响应体重写脚本
 */

let obj = JSON.parse($response.body);

// 构造 SVIP 属性数据
obj = {
  "data": {
    "psnl_vip_property": {
      "expiry": 4102415999,      // 过期时间 2099-12-31
      "svip": 1,                 // 开启 SVIP 标识
      "nxt_renew_tm": 4102415999 // 下次续费时间
    }
  }
};

$done({ body: JSON.stringify(obj) });
