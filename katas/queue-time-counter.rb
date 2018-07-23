def queue(queuers, pos)
  wait = 0
  loop do
    (0..queuers.length - 1).each do |x|
      wait += 1
      i = queuers.shift - 1
      return wait if pos == 0 && i == 0
      pos -= 1
      queuers.push(i) if i > 0
      pos = queuers.length - 1 if pos < 0
    end
  end
end