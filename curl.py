import http.client

conn = http.client.HTTPSConnection("www.machinools.com")

payload = "{\n  \"lang\": \"fr\",\n  \"title\": \"banane\",\n  \"nPredLevels\": 0,\n  \"nSuccLevels\": 1,\n  \"reverseData\": false,\n  \"keyword\": \"banane\"\n}"

headers = { 'Content-Type': "application/json" }

conn.request("POST", "/api/entity/neigh_graph", payload, headers)

res = conn.getresponse()
data = res.read()

print(data.decode("utf-8"))
