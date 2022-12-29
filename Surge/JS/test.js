[rewrite_local]

^https:\/\/api\.revenuecat\.com\/.+\/subscribers\/[^/]+/(offerings|attributes)$ url request-header (\r\n)X-RevenueCat-ETag:.+(\r\n) request-header $1$2

[mitm] 

hostname=api.revenuecat.com
