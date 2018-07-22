# noinspection SpellCheckingInspection
def queue(queuers, pos, total_time = 0)
  min_index = queuers.each_with_index.min[1]
  if min_index == pos
    buff = pos
    #todo pos of zero value
    return (queuers[pos] - 1) * queuers.length + 1 + buff + total_time
  end
  total_time += min_index + queuers[min_index] * queuers.length
  left_move = 0
  queuers = queuers[0...min_index].map {|v| v -= queuers[min_index] + 1} + queuers[min_index..-1].map {|v| v -= queuers[min_index]}
  queuers = queuers.each_with_index.reject {
      |v| v[0].zero?
    if v[1] < pos && v[0].zero?
      left_move += 1
    end
  }.map {
      |i| i[0]
  }
  pos -= min_index + left_move
  queuers.rotate!(min_index)
  pos = pos.negative? ? queuers.length + pos : pos
  queue(queuers, pos, total_time)
end


puts queue([70, 80, 353, 35, 3, 3, 3, 3, 1, 643, 3, 7, 491, 49, 36, 664, 3, 15, 1, 98, 70, 4, 795, 3, 8, 68], 6)

# 70, 80, 353, 35, 3, 3, 3!, 3, 1, 643, 3, 7, 491, 49, 36, 664, 3, 15, 1, 98, 70, 4, 795, 3, 8, 68
# 2, 3, 994, 282, 6, 102, 9, 3, 611, 63, 3, 242, 3, 86, 937, 124 | + 2